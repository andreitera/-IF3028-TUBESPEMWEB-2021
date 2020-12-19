<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_laporan'); //ngambil model model_lapor dari folder models
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$data['laporan'] = $this->Model_laporan->getlapor(); //getlapor() ada di model Model_laporan
		$this->load->view('header');
		$this->load->view('home',$data);
	}

	public function detail($id)
	{	
		$data['laporan'] = $this->Model_laporan->detail($id); //getlapor() ada di model Model_laporan
		$this->load->view('header');
		$this->load->view('detaillapor',$data);
	}

	public function edit($id)
	{
		$data['aspek'] = ['Pilih Aspek Pelaporan/Komentar','Dosen','Staff','Mahasiswa','Infrastruktur','Pengajaran'];
		$data['laporan'] = $this->Model_laporan->detail($id);
		$this->load->view('header');
		$this->load->view('editlapor',$data);
	}

	public function cari($cari){
		$data['laporan'] = $this->Model_laporan->cari($cari); //getlapor() ada di model Model_lapor
		$data['coba'] = $cari;
		$this->load->view('cari',$data);
	}
}
