<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Beranda_model');
		$this->load->helper('Form');
	}
	public function index()
	{
		$data['laporan'] = $this->Beranda_model->getAllLapor();
		$this->load->view('beranda',$data);
	}

	public function cari()
	{
		$keyword = $this->input->get('keyword');
		$data['result'] = $this->Beranda_model->getCari($keyword, 'laporan');
		$this->load->view('hasilcari',$data);
	}
}
