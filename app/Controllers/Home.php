<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\LogModel;
use App\Libraries\cookie_options;

class Home extends BaseController
{
	public function __construct()
	{

		$this->Time = new Time('Asia/Jakarta');
		$this->email = \Config\Services::email();
		$this->LogModel = new LogModel();
		helper('text');
		helper('cookie');
		$this->cookie_options = new cookie_options();
	}

	public function index()
	{
		if (empty($_COOKIE['view-web-sapirum'])) {
			$this->cookie_options->setCookies();
		} else {
			$this->cookie_options->updateCookies();
		}
		$data = [
			'title' => 'Spairum.com',
		];

		return view('home', $data);
	}
	public function team()
	{
		if (empty($_COOKIE['view-web-sapirum'])) {
			$this->cookie_options->setCookies();
		} else {
			$this->cookie_options->updateCookies();
		}
		$data = [
			'title' => 'Spairum.com',
			'page' => 'Explore',
		];

		return view('team', $data);
	}
	public function about()
	{
		if (empty($_COOKIE['view-web-sapirum'])) {
			$this->cookie_options->setCookies();
		} else {
			$this->cookie_options->updateCookies();
		}
		$data = [
			'title' => 'Spairum.com',
			'page' => 'Explore',
		];
		return view('about', $data);
	}

	//--------------------------------------------------------------------

}
