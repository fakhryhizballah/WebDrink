<?php

namespace App\Libraries;

use CodeIgniter\I18n\Time;
use App\Models\AdminModel;
use App\Models\SessionModel;
use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

class loginAuth
{
    public function __construct()
    {
        $this->AdminModel = new AdminModel();
        $this->SessionModel = new SessionModel();
        $this->time =  new Time('now', 'Asia/Jakarta');
    }

    public function login($id_admin)
    {
        // $coJWT = $_COOKIE['spairum_sesi'];
        $key = getenv('tokenkey');
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $payload = [
            'id_admin' => $id_admin,
            'ip' => $ipAddress,
            'login_time' => $this->time
        ];
        $jwt = JWT::encode($payload, $key, 'HS256');
        $admin = $this->AdminModel->findAdmin($id_admin);
    }
    public function test()
    {
        return $this->time;
    }
}
