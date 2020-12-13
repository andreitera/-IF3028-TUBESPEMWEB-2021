<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index');
	}

	public function insert()
	{
		helper('form');
		return view('home/insert');
	}

	public function update()
	{
		helper('form');
		return view('home/update');
	}
	//--------------------------------------------------------------------

}
