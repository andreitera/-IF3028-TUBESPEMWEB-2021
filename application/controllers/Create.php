<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Create extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
        
	}
    
    public function index()
    {
       
        $this->form_validation->set_rules('laporan','Laporan','required');
        $this->form_validation->set_rules('aspek','Aspek','required');
       // $this->form_validation->set_rules('myFile','File','required');
        
        if($this->form_validation->run() == FALSE){
            $data ['judul'] = "Tugas Besar PWB 118140048-118140103-118140105"; 
            $this->load->view('Create/index',$data);
        }
        else{
            $this->Home_model->tambahLaporan();
            
        }
    }


}

?>
