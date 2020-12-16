<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halamanutama extends CI_Controller {

	public function index()
	{
		echo "Halaman utama<br>";

		$query = $this->load->model('lapor_m');
		print_r($query);
	}
 
}
