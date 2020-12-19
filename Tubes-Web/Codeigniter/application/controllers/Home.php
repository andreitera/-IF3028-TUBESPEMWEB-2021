<?php

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lapor_db');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['lapor'] = $this->Lapor_db->getLaporan();
        $this->load->view('home/index', $data);
    }

    public function tambah_data()
    {
        $this->form_validation->set_rules('isi','Isi','required|min_length[250]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('tambahdata/index');
        }
        else
        {
            $this->Lapor_db->tambahdata();
            echo " <script> alert('Berhasil Menambah Data!'); document.location.href='../'; </script> ";
        }
    }
}