<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->model('Model_lapor');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['news'] = $this->Model_lapor->get_news();
		$data['title'] = 'Arsip Berita';

		$this->load->view('baru/index', $data);
	}

	public function view($slug = NULL)
	{
		$data['news_item'] = $this->Model_lapor->get_news($slug);

		$this->load->view('baru/view', $data);
	}
}
?>