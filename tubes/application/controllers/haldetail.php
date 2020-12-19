<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class haldetail extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_haldetail');
	}
	public function index() {
		$data['title']='SIMPLE LAPOR!';
		$data['laporan'] = $this->model_lapor->getLaporan();

		$this->load->view('templates/header',$data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');  
	}
	public function form() {
		$data['title']='Buat Laporan';
    
	 
	    $this->load->view('templates/header',$data);
	    $this->load->view('home/form', array('error' => ' ' ));
	    $this->load->view('templates/footer'); 
	    }

}
