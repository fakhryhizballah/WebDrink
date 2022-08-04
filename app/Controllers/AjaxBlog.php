<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\I18n\Time;
use App\Models\LogModel;
use App\Models\ArtikelModel;
use App\Libraries\loginAuth;

class AjaxBlog extends ResourceController
{
    public function __construct()
    {

        $this->Time = new Time('Asia/Jakarta');
        $this->email = \Config\Services::email();
        $this->LogModel = new LogModel();
        $this->ArtikelModel = new ArtikelModel();
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
    public function valid()
    {
        $response = [
            'status' => 407,
            'error' => true,
            'data' =>  "Sorry you are not logged in"
        ];
        return $this->respond($response, 200);
        
    }
}
