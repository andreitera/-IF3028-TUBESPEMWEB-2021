<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ubah extends CI_Controller{
    public function __construct()
	{
        parent::__construct();
        
        $this->load->model('Ubah_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->library('form_validation');
	}
    
    public function index()
    {
        // $this->Hapus_model->getUbahLaporan();
        // redirect('home');

        $data ['ubah'] = $this->Ubah_model->getUbahLaporan();
       
        $this->form_validation->set_rules('laporan','Laporan','required');
        $this->form_validation->set_rules('aspek','Aspek','required');
        // $this->form_validation->set_rules('myFile','File','required');

        if($this->form_validation->run() == FALSE){
            $data ['judul'] = 'Ubah Laporan';
            $this->load->view('ubah_laporan/index',$data);
        }
        else{
            $this->Ubah_model->updateLaporan();
         
        }
    }

    
}

?>