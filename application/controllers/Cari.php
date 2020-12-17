<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cari_model');
		$this->load->helper("url");
		$this->load->helper("form");

		
		
		
	}

	public function index() 
	{
		if($this->input->post('submit')){
			$data ['keyword']= $this->input->post('keyword');
		}
		else{
			$data['keyword']= null;
		}
		$data ['judul'] = 'Hasil';
		$data ['cari'] = $this->Cari_model->cariData($data['keyword']);
		// $this->load->database();
		$this->load->view('pencarian/index',$data);


	}
 
}
