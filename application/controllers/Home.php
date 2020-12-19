<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if(!$this->session->has_userdata('user_token')) {
			$this->session->set_userdata('user_token', uniqid());
		}

		$this->load->model('Kategori');
		$kategori = $this->Kategori->get();

		$data = array(
			'kategori' => $kategori
		);
		
		$this->load->view('Home', $data);
	}
}
