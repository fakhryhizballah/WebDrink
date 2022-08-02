<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\I18n\Time;
use App\Models\LogModel;
use App\Libraries\cookie_options;
use App\Models\ArtikelModel;

class AjaxBlog extends ResourceController
{
    public function __construct()
    {

        $this->Time = new Time('Asia/Jakarta');
        $this->email = \Config\Services::email();
        $this->LogModel = new LogModel();
        $this->ArtikelModel = new ArtikelModel();
        helper('text');
        helper('cookie');
        $this->cookie_options = new cookie_options();
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
}
