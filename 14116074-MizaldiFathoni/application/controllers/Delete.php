<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Delete extends CI_Controller{
    
    public function __construct()
	{
        parent::__construct();
        
        $this->load->model('ModelData');
        $this->load->helper(array('form', 'url'));
	}
    
    public function index()
    {
        $this->ModelData->hapusLaporan();
     
    }
}

?>