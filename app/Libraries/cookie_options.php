<?php

namespace App\Libraries;

use CodeIgniter\I18n\Time;
use App\Models\LogModel;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class kunci
{
    public static $keys = 'kata kunci';
    private static $arr_cookie_options = null;

    public static function arr_cookie_options()
    {
        if (self::$arr_cookie_options == null) {
            self::$arr_cookie_options = array(
                'expires' => time() + 60 * 60 * 24 * 30,
                'path' => '/',
                'domain' => "", // leading dot for compatibility or use subdomain
                'secure' => true,     // or false
                'httponly' => false,    // or false
                'samesite' => 'None' // None || Lax  || Strict
            );
        }
        return self::$arr_cookie_options;
    }
}
class cookie_options
{
    public function __construct()
    {
        $this->LogModel = new LogModel();
        helper('text');
        $this->Time = new Time('Asia/Jakarta');
        helper('cookie');
    }

    public function setCookies()
    {
        $url = $_SERVER['REQUEST_URI'];
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = $_SERVER['HTTP_REFERER'];
        } else {
            $referer = 'Link';
        }

        $id_token = random_string('alnum', 30);
        $token = [
            'user' => $id_token,
            'kunjungan' => 1,
            'Route' => $url,
            'IP' => $ipAddress,
        ];
        $jwt = JWT::encode($token, kunci::$keys,  'HS256');
        $this->LogModel->save([
            'token' => $id_token,
            'IP' => $ipAddress,
            'Route' => $url,
            'Referer' => $referer
        ]);
        // dd($jwt);
        return setCookie("view-web-sapirum", $jwt, kunci::arr_cookie_options());
    }
    public function updateCookies()
    {
        $url = $_SERVER['REQUEST_URI'];
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = $_SERVER['HTTP_REFERER'];
        } else {
            $referer = 'Link';
        }
        $token = $_COOKIE['view-web-sapirum'];
        $data =  json_decode(json_encode(JWT::decode($token, new Key(kunci::$keys, 'HS256'))));
        if ($data->Route == $url) {
            $data->IP = $ipAddress;
            $data = json_decode(json_encode($data), true);
            $jwt = JWT::encode($data, kunci::$keys,'HS256');
            return setCookie("view-web-sapirum", $jwt,  kunci::arr_cookie_options());
        } else {
            $data->Route = $url;
            $data->IP = $ipAddress;
            $data->kunjungan = $data->kunjungan + 1;
            $data = json_decode(json_encode($data), true);
            $jwt = JWT::encode($data, kunci::$keys, 'HS256');
            $this->LogModel->save([
                'token' => $data['user'],
                'IP' => $ipAddress,
                'Route' => $url,
                'Referer' => $referer
            ]);
            return setCookie("view-web-sapirum", $jwt, kunci::arr_cookie_options());
        }
    }
}
