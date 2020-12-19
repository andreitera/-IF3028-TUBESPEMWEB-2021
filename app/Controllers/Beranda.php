<?php

namespace App\Controllers;

class Beranda extends BaseController
{
	public function index()
	{
		return view('beranda');
	}
	public function detail()
	{
		return view('detailLaporan');
	}

	//--------------------------------------------------------------------

}
