<?php
    defined("BASEPATH") OR exit("No direct script access allowed");

    class Laporan_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("laporan_model");
            $this->load->library('form_validation');
	    }
        public function index(){
            $data["laporan"] = $this->laporan_model->getAll();
            $this->load->view("tampilan_view", $data); 
        }

        public function add(){
            $laporan = $this->Laporan_model;
            $validation = $this->form_validation;
            $validation->set_rules($laporan->rules());

            if($validation->run()){
                $laporan->save();
                $this->session->set_flashdata('success','Berhasil dikirim');
            }
        }

        public function tambah(){
            $this->load->view("tambah_view");
        }
      
    }
?>