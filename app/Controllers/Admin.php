<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ArtikelModel;
use App\Models\ArsipModel;
use App\Models\AdminModel;
use App\Libraries\cookie_options;
use App\Libraries\loginAuth;


class Admin extends BaseController
{
    public function __construct()
    {
        $this->ArtikelModel = new ArtikelModel();
        $this->ArsipModel = new ArsipModel();
        $this->AdminModel = new AdminModel();
        $this->loginAuth = new loginAuth();

        helper('cookie');
        $this->cookie_options = new cookie_options();
    }
    public function login()
    {
        try {
            $admin = $this->loginAuth->ceklogin();
            if ($admin != false) {
                return redirect()->to('/admin/home');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
        $client = new \Google_Client();

        $clientID = getenv('google.clientID');
        $clientSecret = getenv('google.clientSecret');
        $redirectUri = getenv('google.redirectUri');
        $guzzleClient = new \GuzzleHttp\Client(['verify' => false]);
        $client->setHttpClient($guzzleClient);
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");
        $authUrl = $client->createAuthUrl();
        // dd($authUrl);
        $data = [
            'title' => 'login |Spairum.com',
            'urlOauth' => $authUrl

        ];
        return view('admin/login', $data);
    }
    public function redirect()
    {
        $client = new \Google_Client();
        $guzzleClient = new \GuzzleHttp\Client(['verify' => false]);
        $clientID = getenv('google.clientID');
        $clientSecret = getenv('google.clientSecret');
        $redirectUri = getenv('google.redirectUri');
        $client->setHttpClient($guzzleClient);
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");
        if (isset($_GET["code"])) {

            $token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);
            $client->setAccessToken($token);
            $gauth = new \Google_Service_Oauth2($client);
            $data = $gauth->userinfo->get();
            $admin = $this->AdminModel->findAdmin($data->email);
            if ($admin != false) {
                $new = [
                    'id' => $admin->id,
                    'id_admin'  => $data->id,
                    'picture' => $data->picture,
                    'username' => $data->givenName,
                    'fullname' => $data->name
                ];
                $this->AdminModel->save($new);
                $this->AdminModel->save([
                    'id' => $data->id,
                    'id_admin'  => $data->id,
                    'picture' => $data->picture,
                    'username' => $data->givenName,
                    'fullname' => $data->name
                ]);
                $this->loginAuth->login($data->id);
                return redirect()->to('/admin/home');
            }
        }
        return redirect()->to('/');
    }

    public function crt_artikel()
    {
        $data = [
            'title' => 'Buat Artikel | Spairum.com',

        ];
        return view('admin/crt_artikel', $data);
    }

    public function arsip_foto()
    {
        $arsip = $this->ArsipModel->findAll();
        // dd($arsip);
        $data = [
            'title' => 'Arsip Foto | Spairum.com',
            'arsip' => $arsip,
        ];
        return view('admin/arsip_foto', $data);
    }


    public function arsip_arikel()
    {
        $data = [
            'title' => 'Upload Foto | Spairum.com',
        ];
        return view('admin/arsip_arikel', $data);
    }

    public function logout()
    {
        $this->loginAuth->logout();
        return redirect()->to('/');
    }

}
