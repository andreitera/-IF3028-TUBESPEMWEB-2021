<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lapor extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
}
