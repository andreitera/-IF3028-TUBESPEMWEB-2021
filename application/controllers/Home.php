<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$data ['judul'] = "Tugas Besar PWB 118140048-118140103-118140105"; 
		$data ['home'] = $this->Home_model->getAllHome();
		$this->load->view('home/index',$data);
	
	}

	// public function ambildata()	{
    //     $dataLaporan = $this->Home_model->ambildatanya->result();
    //     echo json_encode($dataLaporan);
    // }

<<<<<<< HEAD
=======
	public function index()	{
        $data['title'] = "Tugas Besar PWB 118140048-118140103-118140105"; 
		$this->load->view('home/index', $data);
    }
    
    public function ambildata()	{
        $dataLaporan = $this->m->ambildata('laporkuy')->result();
        echo json_encode($dataLaporan);
    }
>>>>>>> 9ed1a424b5b632212be1e9a66cdee38cf78e8feb
}
