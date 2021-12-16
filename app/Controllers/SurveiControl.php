<?php

namespace App\Controllers;

use App\Models\SurveiHpModel;
use App\Libraries\cookie_options;
use App\Libraries\pubMqtt;

class SurveiControl extends BaseController
{
    public function __construct()
    {
        $this->SurveiHpModel = new SurveiHpModel();
        $this->pubMqtt = new pubMqtt();
        $this->email = \Config\Services::email();
        helper('cookie');
        $this->cookie_options = new cookie_options();
    }
    public function index($id_user)
    {
        if (empty($_COOKIE['view-web-sapirum'])) {
            $this->cookie_options->setCookies();
        } else {
            $this->cookie_options->updateCookies();
        }
        $data = json_decode(base64_decode($id_user));
        if ($data == null) {
            session()->setFlashdata('flash', "Maaf Link anda tidak valid");
            return redirect()->to('/about');
        }
        // dd($data);
        $data = [
            'title' => 'Survei device user | Spairum.my.id',
            'id_user' => $id_user
        ];

        return view('survei/dataHp', $data);
    }
    public function BrandSave()
    {
        $Iduser = $this->request->getVar('Iduser');
        $data = json_decode(base64_decode($Iduser));
        $noHp = $data->hp;
        $nama = $data->nama;
        //    dd($this->request->getVar('Iduser'));
        $this->SurveiHpModel->save([
            'nama' => $nama,
            'iduser' => $data->id,
            'seris' => $this->request->getVar('Seris'),
            'os' => $this->request->getVar('OS'),
            'nama' => $nama,
            'brand' => $this->request->getVar('Brand'),
            'device' => $_SERVER['HTTP_USER_AGENT'],
            'IP' => $_SERVER['REMOTE_ADDR'],
        ]);
        session()->setFlashdata('Berhasil', "Terimakasih $nama telah membantu kami untuk pengembangan aplikasi yang lebih bakik");
        $pesan = [
            'number' => $noHp,
            'message' => "Terimakasih $nama telah mengisi survi jika ada kedala atau ada masukan silahkan hubungi nomor ini."
        ];

        $this->pubMqtt->publish('sendPesan', json_encode($pesan));
        return redirect()->to('/about');
    }
}
