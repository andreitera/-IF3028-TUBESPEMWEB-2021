<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('input_form');
		$this->load->library('form_validation');
		$this->load->helper('url_helper');
	}
	public function input_form(){
		$upload = $this->input_form->do_upload();
		$this->input_form->create($upload);
		redirect('');
	  }
			
}
?>