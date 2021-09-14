<?php

namespace App\Libraries;

use CodeIgniter\I18n\Time;
use App\Models\LogModel;
use Firebase\JWT\JWT;

class key
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

        $jwt = JWT::encode($token, key::$keys);
        $this->LogModel->save([
            'token' => $id_token,
            'IP' => $ipAddress,
            'Route' => $url,
            'Referer' => $referer
        ]);
        return setCookie("view-web-sapirum", $jwt, key::arr_cookie_options());
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
        $data =  json_decode(json_encode(JWT::decode($token, key::$keys, array('HS256'))), true);
        if ($data['Route'] == $url) {
            $data['IP'] = $ipAddress;
            $jwt = JWT::encode($data, key::$keys);
            return setCookie("view-web-sapirum", $jwt,  key::arr_cookie_options());
        } else {
            $data['Route'] = $url;
            $data['IP'] = $ipAddress;
            $data['kunjungan'] = $data['kunjungan'] + 1;
            $jwt = JWT::encode($data, key::$keys);
            $this->LogModel->save([
                'token' => $data['user'],
                'IP' => $ipAddress,
                'Route' => $url,
                'Referer' => $referer
            ]);
            return setCookie("view-web-sapirum", $jwt, key::arr_cookie_options());
        }
    }
}
