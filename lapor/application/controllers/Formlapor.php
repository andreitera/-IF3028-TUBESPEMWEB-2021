<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formlapor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_laporan'); //ngambil model model_lapor dari folder models
		$this->load->library('form_validation');
	}
	
	public function index(){
		$data['laporan'] = $this->Model_laporan->getlapor(); //getlapor() ada di model Model_lapor
		$this->load->view('header');
		$this->load->view('formlapor', $data);
	}

	public function newLapor()
	{
		$this->form_validation->set_rules('komentar', 'komentar', 'required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('home');

		}else{
			$this->Model_laporan->tambah();
			echo "
				<script>
					alert('berhasil menambah data');
					document.location.href='../';
				</script>
				";
		}
	}

}
