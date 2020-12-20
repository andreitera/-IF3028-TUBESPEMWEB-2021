<?php

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->input->post('register')) {
			$this->auth->register();
			redirect('auth');
		} else {
			$this->load->view('register');
		}
	}
}
