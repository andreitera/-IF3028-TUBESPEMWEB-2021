<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Update extends CI_Controller{
    public function __construct()
	{
        parent::__construct();
        
        $this->load->model('Update_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('form_validation');
	}
    
    public function index()
    {
        $data ['ubah'] = $this->Update_model->getUbahLaporan();
       
        $this->form_validation->set_rules('laporan','Laporan','required');
        $this->form_validation->set_rules('aspek','Aspek','required');
        // $this->form_validation->set_rules('myFile','File','required');

        if($this->form_validation->run() == FALSE){
            $data ['judul'] = "Tugas Besar PWB 118140086"; 
            $this->load->view('Update/index',$data);
        }
        else{
            $this->Update_model->updateLaporan();
         
        }
    }

    
}

?>
