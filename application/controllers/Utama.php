<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function index()
	{
		echo "Halaman utama<br>";

		$query = $this->load->model('lapor_m');
		print_r($query);
	}
 
}
