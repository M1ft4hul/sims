<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$data  = [
			'title' => 'Login | SIMS'
		];
		return view('login', $data);
	}
	//--------------------------------------------------------------------

}
