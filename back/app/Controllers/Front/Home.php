<?php

namespace App\Controllers\Front;
use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		return view('front/home');
	}

	public function sayHola(){
		echo "Hola";
	}

}
