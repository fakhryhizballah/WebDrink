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
        $key = getenv('tokenkey');
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $log_ip = array($ipAddress);
        $data_Ip = json_encode($log_ip);
        $payload = [
            'id_admin' => $id_admin,
            'ip' => $ipAddress,
            'login_time' => $this->time
        ];
        $jwt = JWT::encode($payload, $key, 'HS256');
        $data = [
            'IP' => $ipAddress,
            'log_IP' =>  $data_Ip,
            'id_admin' => $id_admin,
            'token' => $jwt,
            'status' => "login"
        ];
        $this->SessionModel->save($data);
        setcookie(setCookie("spairum_sesi", $jwt, loginAuth::cookie_options()));
    }
    public function ceklogin()
    {
        try {
            $token = $_COOKIE['spairum_sesi'];
            $key = getenv('tokenkey');
            $decoded = JWT::decode($token, new Key($key, 'HS256'));
            $id_admin = $decoded->id_admin;
            $akun = $this->AdminModel->cekAkun($id_admin);
            // dd($akun);
            if ($akun != false) {
                return $akun;
            }
        } catch (\Exception $exception) {
            session()->setFlashdata('gagal', 'sesi login anda telah habis');
            setCookie("spairum_sesi", "Logout", time() + (86400 * 30), "/");
            // session()->setFlashdata('gagal', 'Login Dulu');
            return false;
        }

        return false;
    }
    public function logout()
    {
        try {

            $token = $_COOKIE['spairum_sesi'];
            $ipAddress = $_SERVER['REMOTE_ADDR'];
            $sesi = $this->SessionModel->findsesi($token);
            if ($sesi != false) {
                $logIp = json_decode($sesi->log_IP);
                array_push($logIp,  $ipAddress);
                $data_Ip = json_encode($logIp);
                // dd($data_Ip);
                $data = [
                    'id' => $sesi->id,
                    'log_IP' => $data_Ip,
                    'status' => "logout"
                ];
                $this->SessionModel->save($data);
                setCookie("spairum_sesi", "Logout", time() + (86400 * 30), "/");
                return;
            }
            setCookie("spairum_sesi", "Logout_without", time() + (86400 * 30), "/");
            return;
        } catch (\Throwable $th) {
            //throw $th;
            return;
        }
        return;
    }


    public static function cookie_options()
    {
        $arr_cookie_options = array(
            'expires' => time() + 60 * 60 * 24 * 365,
            'path' => '/',
            'domain' => "", // leading dot for compatibility or use subdomain
            'secure' => true,     // or false
            'httponly' => false,    // or false
            'samesite' => 'None' // None || Lax  || Strict
        );
        return $arr_cookie_options;
    }
}
