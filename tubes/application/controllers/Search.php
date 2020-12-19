<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Model di panggil di awal sebelum masuk ke fungsi
		$this->load->model('Lapor_model');
	}
	//Membuat controll  untuk pencarian berdasarlan judul dan isi laporan
	public function index() {
		$data['title']='Pencarian Data';
		$data['name']='Hasil pencarian laporan';
		$data['laporan'] = $this->Lapor_model->search();

 		$this->load->view('templates/header',$data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer'); 
	}
}
