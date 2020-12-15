<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('berita_model');

	}

	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] 	= base_url('home/index/');
		$config['total_rows'] 	= count($this->berita_model->total());
		$config['per_page'] 	= 3;
		$config['uri_segment']	= 3;

		$limit			=	$config['per_page'];
		$start			=	($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
		$this->pagination->initialize($config);

		$berita 		=	$this->berita_model->berita($limit,$start);

		$data = array(	'page'		=>	$this->pagination->create_links(),
						'berita'	=>	$berita,
						'limit'		=>	$limit,
						'total'		=>	$config['total_rows'],
					);
        $this->load->view('home', $data, FALSE);
	
	}

	public function read($slug_berita)
	{
		$berita 	=	$this->berita_model->read($slug_berita);
		
		$data = array(	'berita'	=>	$berita,);
		$this->load->view('laporan', $data, FALSE);
	}
}
