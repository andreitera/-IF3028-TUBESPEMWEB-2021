<?php namespace App\Controllers;

use Config\App;

class Home extends BaseController{
	public function __construct(){
		helper('form');
	}
	public function index(){
		$data = new \App\Models\LaporanModel();
		$all = $data->findAll();
		return view('home/index',[
			'all' => $all
		]);
	}

	public function detail(){
		$id = $this->request->uri->getSegment(3);
		$data = new \App\Models\LaporanModel();
		$all = $data->where('id', $id)->first();

		return view('home/detail',[
			'all' => $all
		]);
	}
}
