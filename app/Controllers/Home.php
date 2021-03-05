<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data  = [
			'title' => 'SIMS | Dashboard'
		];
		return view('home', $data);
	}
	//--------------------------------------------------------------------

}
