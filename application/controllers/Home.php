<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data ['judul'] = 'LAPORIN';
		//$data ['home'] = $this->Home_model->getAllHome();
		// $this->load->database();
		$this->load->view('home/index',$data);
	
	}

}
