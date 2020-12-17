<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
            $this->load->model('Model_home', 'm');
            $this->load->helper('form');
            $this->load->helper('url');

    }

	public function index()	{
        $data['title'] = "Tugas Besar PWB 118140048-118140103-118140105"; 
		$this->load->view('home/index', $data);
	}
}

?>
