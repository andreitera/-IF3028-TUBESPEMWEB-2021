<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function index()
	{
		$this->load->model('lapor_m');
		$query = $this->lapor_m->get();
		$data['header'] = 'Tubes PemWEB RD';
		$data['utama'] = $query->result();
		$this->load->view('lapor_tampil', $data);

	}
 
}
