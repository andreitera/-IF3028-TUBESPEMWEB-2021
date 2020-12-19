<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Arsip Berita';
		$this->load->view('baru/index', $data);
	}
}
?>