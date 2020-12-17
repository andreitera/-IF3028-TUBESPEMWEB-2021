<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buat extends CI_Controller{
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
            $data ['judul'] = 'Buat Laporan';
            $this->load->view('buat_laporan/index',$data);
        }
        else{
            $this->Home_model->tambahLaporan();
            
        }
    }


}

?>