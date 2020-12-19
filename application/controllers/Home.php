<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if(!$this->session->has_userdata('user_token')) {
			$this->session->set_userdata(uniqid());
		}

		$this->load->model('Laporan');
		$laporan = $this->Laporan->get();

		$data = array(
			'laporan' => $laporan
		);
		
		$this->load->view('Home', $data);
	}
}
