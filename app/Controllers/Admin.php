<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ArtikelModel;
use App\Models\AdminModel;
use App\Libraries\cookie_options;
use App\Libraries\loginAuth;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ArtikelModel = new ArtikelModel();
        $this->AdminModel = new AdminModel();
        $this->loginAuth = new loginAuth();

        helper('cookie');
        $this->cookie_options = new cookie_options();
    }
    public function login()
    {
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
                $dataNew =  $this->AdminModel->save($new);
                // dd($dataNew);
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
    public function home()
    {
        $data = [
            'title' => 'sudah login |Spairum.com',

        ];
        return view('admin/home', $data);
    }

}
