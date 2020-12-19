<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function index()
	{
		$this->load->model('lapor_m');
		$query = $this->lapor_m->get();
		$data['header'] = 'Halaman Utama';
		$data['utama'] = $query->result();
		$this->load->view('lapor_tampil', $data);

	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['utama'] = $this->lapor_m->get_keyword($keyword);
		$this->load->view('detail', $data);
	}

}
