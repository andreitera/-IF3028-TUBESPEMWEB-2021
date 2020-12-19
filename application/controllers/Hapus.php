<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hapus extends CI_Controller{

    public function __construct()
	{
        parent::__construct();
        
        $this->load->model('Model_lapor');
        $this->load->helper(array('form', 'url'));
	}
    
    public function index()
    {
        $this->Model_lapor->getHapusLaporan();
     
    }
}

?>