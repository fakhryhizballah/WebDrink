<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\I18n\Time;
use App\Models\LogModel;
use App\Models\ArtikelModel;
use App\Models\ArsipModel;
use App\Models\StatusModel;
use App\Libraries\loginAuth;

class AjaxBlog extends ResourceController
{
    public function __construct()
    {

        $this->Time = new Time('Asia/Jakarta');
        $this->email = \Config\Services::email();
        $this->LogModel = new LogModel();
        $this->ArtikelModel = new ArtikelModel();
        $this->ArsipModel = new ArsipModel();
        $this->StatusModel = new StatusModel();
        $this->loginAuth = new loginAuth();
        helper('text');
        helper('cookie');
    }
    public function index()
    {
        $response = [
            'status' => 200,
            'error' => false,
            'data' => "selamat datang spairum API"
        ];
        return $this->respond($response, 200);
    }
    public function getList()
    {
        $data = $this->ArtikelModel->getlist();
        // return json_encode($data);
        $response = [
            'status' => 200,
            'error' => false,
            'data' => $data
        ];
        return $this->respond($response, 200);
        // dd($data);
    }
    public function postArtikel()

    {
        $admin = $this->loginAuth->ceklogin();
        // dd($admin);
        if ($admin == false) {
            $response = [
                'status' => 407,
                'error' => true,
                'data' =>  "Sorry you are not logged in"
            ];
            return $this->respond($response, 407);
        }
        $ip = $this->request->getIPAddress();
        $body = $this->request->getBody();
        $data = json_decode($body, true);
        $data['ip'] = $ip;
        $response = [
            'status' => 200,
            'error' => false,
            'data' =>   $admin
        ];
        return $this->respond($response, 200);
    }

    public function thumbnail()
    {
        try {
            $admin = $this->loginAuth->ceklogin();
            $id = $this->request->getPost();
            $imageFile = $this->request->getFile('file');
            $validate = $this->validate([
                'file' => [
                    'rules' => 'uploaded[file]|max_size[file,10240]|is_image[file]|mime_in[file,image/png,image/jpg,image/jpeg]',
                    'errors' => [
                        'mime_in' => 'file harus berupa gambar jpg/jpeg/png',
                        'max_size' => 'Foto tidak boleh lebih dari 10MB',
                        'uploaded' => 'file tidak boleh lebih dari 10MB',
                        'is_image' => 'file harus berupa gambar'
                    ]
                ],
                'alt' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'nama foto wajib diisi'
                    ]
                ]
            ]);
            if (!$validate) {
                $validation = \config\Services::validation();
                $response = [
                    'status' => 407,
                    'error' => true,
                    'data' =>  $validation->getErrors(),
                    'file' => $validation->hasError('file'),
                    'alt' => $validation->hasError('alt')
                ];
                return $this->respond($response, 200);
            }

            $namafile = $imageFile->getClientName();
            $mime = $imageFile->getClientMimeType();
            $imageFile->move(WRITEPATH . 'img/', $namafile);
            $file = new \CodeIgniter\Files\File(WRITEPATH . "img/$namafile");
            $link = $file->getRealPath();
            $img = new \CURLFILE($link);
            $img->setMimetype($mime);
            $img->setPostFilename($namafile);

            $curl = curl_init();
            $headers = array("Content-Type:multipart/form-data");

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://cdn.spairum.my.id/api/upload/single/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_HEADER => true,
                CURLOPT_SSL_VERIFYPEER => false, // this line makes it work under https
                CURLOPT_HTTPHEADER => $headers,
                CURLOPT_POSTFIELDS => array('image' => $img),
            ));

            $res = curl_exec($curl);
            $status = curl_getinfo($curl);
            unlink(WRITEPATH . "img/$namafile");

            if (!curl_errno($curl)) {
                $status = curl_getinfo($curl);
                if ($status['http_code'] == 200) {
                    $info = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
                    $body = substr($res, $info);
                } else {

                    $response = [
                        'status' => $status['http_code'],
                        'error' => true,
                        'data' =>  $status
                    ];
                    return $this->response->setJSON($response);
                }
            } else {
                $errmsg = curl_error($curl);
                $response = [
                    'error' => true,
                    'msg' => $errmsg
                ];
                return $this->response->setJSON($response);
            }

            curl_close($curl);

            $url = json_decode($body, true)['data']['url'];
            $db      = \Config\Database::connect();
            $db->transStart();
            $this->ArsipModel->save([
                'url' => $url,
                'alt' => $this->request->getPost('alt'),
                'id_admin' =>  $admin->id_admin,
                'id_foto' => uniqid()
            ]);
            $db->transComplete();
            $response = [
                'status' => 200,
                'error' => false,
                'data' =>  $url,
                'alt' => $this->request->getPost('alt'),
                'id_admin' =>  $admin->id_admin,
            ];
            return $this->respond($response, 200);
        } catch (\Throwable $th) {
            $response = [
                'status' => 402,
                'error' => true,
                'data' =>  "Sorry you are not logged in",
                'msg' => $th->getMessage()
            ];
            return $this->respond($response, 200);
        }
    }
    public function getFotoAll()
    {
        $admin = $this->loginAuth->ceklogin();
        if ($admin == false) {
            $response = [
                'status' => 407,
                'error' => true,
                'data' =>  "Sorry you are not logged in"
            ];
            return $this->respond($response, 407);
        }
        $data = $this->ArsipModel->findAll();
        $response = [
            'status' => 200,
            'error' => false,
            'data' => $data
        ];
        return $this->respond($response, 200);
    }

    public function upload_artikel()
    {
        try {
            $admin = $this->loginAuth->ceklogin();
            $body = $this->request->getPost();
            $db      = \Config\Database::connect();
            $random = random_string('alnum', 4);
            $id_artikel = $random . uniqid();
            $slug = AjaxBlog::slugify($body['inputJudul'] . " " . $random);
            $db->transStart();
            $data = [
                'thumbnail' => $body['inputThumbnail'],
                'judul' => $body['inputJudul'],
                'kota' => $body['inputLokasi'],
                'tanggal' => $body['inputTanggal'],
                'id_blog' => $id_artikel,
                'slug' => $slug,
                'des' => $body['inputDeskripsi'],
                'konten' => $body['inputKonten']
            ];
            $this->ArtikelModel->save($data);
            $myTime = new Time('now');
            $penulis = [
                'id_admin' => $admin->id_admin,
                'id_blog' => $id_artikel,
                'created_at' => $myTime,
                'updated_at' => $myTime
            ];
            $db->table('author')->insert($penulis);
            $this->StatusModel->save([
                'id_blog' => $id_artikel,
                'last_admin' => $admin->id_admin,
                'status' => 0,
            ]);

            $db->transComplete();
            // $judul = gettype($body);
            // $judul = $body['inputJudul'];
            $response = [
                'status' => 200,
                'error' => false,
                'data' =>  $data,
                'msg' => 'success',
                'id_admin' =>  $admin->id_admin,
            ];
            return $this->respond($response, 200);
        } catch (\Throwable $th) {
            $response = [
                'status' => 402,
                'error' => true,
                'data' =>  "Sorry you are not logged in",
                'msg' => $th->getMessage()
            ];
            return $this->respond($response, 200);
        }
    }

    public function getArtikelAll()
    {
        $admin = $this->loginAuth->ceklogin();
        if ($admin == false) {
            $response = [
                'status' => 407,
                'error' => true,
                'data' =>  "Sorry you are not logged in"
            ];
            return $this->respond($response, 200);
        }

        $data = $this->ArtikelModel->getlistArtikel();
        $response = [
            'status' => 200,
            'error' => false,
            'data' => $data
        ];
        return $this->respond($response, 200);
    }
    public function editStatus()
    {
        $admin = $this->loginAuth->ceklogin();
        if ($admin == false) {
            $response = [
                'status' => 407,
                'error' => true,
                'data' =>  "Sorry you are not logged in"
            ];
            return $this->respond($response, 200);
        }
        $body = $this->request->getPost();
        $id_artikel = $this->StatusModel->getIdArtikel($body['id_blog']);
        $db      = \Config\Database::connect();
        $db->transStart();
        $this->StatusModel->save([
            'id' => $id_artikel['id'],
            'status' => $body['status'],
            'last_admin' => $admin->id_admin,
        ]);
        $db->transComplete();
        $response = [
            'status' => 200,
            'error' => false,
            'data' =>  null,
            'id_admin' =>  $admin->id_admin,
        ];
        return $this->respond($response, 200);
    }
    public function getArtikel()
    {
        $admin = $this->loginAuth->ceklogin();
        if ($admin == false) {
            $response = [
                'status' => 407,
                'error' => true,
                'data' =>  "Sorry you are not logged in"
            ];
            return $this->respond($response, 200);
        }
        $body = $this->request->getPost();
        $data = $this->ArtikelModel->detailArtikel($body['id_blog']);
        $response = [
            'status' => 200,
            'error' => false,
            'data' => $data
        ];
        return $this->respond($response, 200);
    }
    public function update_artikel()
    {
        $admin = $this->loginAuth->ceklogin();
        if ($admin == false) {
            $response = [
                'status' => 407,
                'error' => true,
                'data' =>  "Sorry you are not logged in"
            ];
            return $this->respond($response, 200);
        }
        $body = $this->request->getPost();
        $data = [
            'id' => $body['hidden'],
            'thumbnail' => $body['inputThumbnail'],
            'judul' => $body['inputJudul'],
            'kota' => $body['inputLokasi'],
            'tanggal' => $body['inputTanggal'],
            'des' => $body['inputDeskripsi'],
            'konten' => $body['inputKonten']
        ];
        $this->ArtikelModel->save($data);
        $response = [
            'status' => 200,
            'error' => false,
            'data' => $data
        ];
        return $this->respond($response, 200);
    }

    public static function slugify($text, string $divider = '-')
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        // trim
        $text = trim($text, $divider);
        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);
        // lowercase
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }


}
