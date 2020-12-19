<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

	public function index(){


		$data ['judul'] = 'Hasil';
		$this->load->view('cari/index',$data);

	}
 
}
