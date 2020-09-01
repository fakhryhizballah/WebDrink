<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Spairum.com',

		];
		return view('home', $data);
	}
	public function team()
	{
		$data = [
			'title' => 'Spairum.com',
			'page' => 'Explore',
		];
		return view('team', $data);
	}
	public function about()
	{
		$data = [
			'title' => 'Spairum.com',
			'page' => 'Explore',
		];
		return view('about', $data);
	}

	//--------------------------------------------------------------------

}
