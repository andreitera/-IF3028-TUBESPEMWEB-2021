<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'Arsip Berita';

		$this->load->view('news/index', $data);
	}

	public function view($slug = NULL)
	{
		$data['news_item'] = $this->news_model->get_news($slug);

		$this->load->view('news/view', $data);
	}
}