<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{
	public function index(){
		$this->load->model('Data_model');
		$data['judul'] = 'Home';
		$data['link'] = 'home';
		$data['lapor'] = $this->Data_model->getDataLapor();
			if ($this->input->post('keyword')) {
				$data['lapor'] = $this->Data_model->cariDataKeluhan();
			}
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}
?>
