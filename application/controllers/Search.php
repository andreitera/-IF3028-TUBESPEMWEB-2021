<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Search_model');
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
		$data ['judul'] = "Tugas Besar PWB 118140086";
		$data ['cari'] = $this->Search_model->cariData($data['keyword']);
		// $this->load->database();
		$this->load->view('Search/index',$data);

	}
 
}
