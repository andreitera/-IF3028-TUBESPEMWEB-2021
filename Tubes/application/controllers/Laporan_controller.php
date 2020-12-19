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

        public function tambah(){
            $laporan = $this->laporan_model;
            $validation = $this->form_validation;
            $validation->set_rules($laporan->rules());

            if ($validation->run()) {
                $laporan->save();
                $this->session->set_flashdata('success', 'Berhasil ditambah');
                redirect('');
            }

            $this->load->view("tambah_view");
        }

        public function edit($id = null){
            if (!isset($id)) redirect('tampilan_view');
        
            $laporan = $this->laporan_model;
            $validation = $this->form_validation;
            $validation->set_rules($laporan->rules());

            if ($validation->run()) {
                $laporan->update();
                $this->session->set_flashdata('success', 'Berhasil diubah');
                redirect('');
            }

            $data["laporan"] = $laporan->getById($id);
            if (!$data["laporan"]) show_404();
            
            $this->load->view("edit_view", $data);
        }

        public function detail($id = null){
            if (!isset($id)) redirect('tampilan_view');
            $laporan = $this->laporan_model;
            $data["laporan"] = $laporan->getById($id);
            $this->load->view("detail_view", $data);
        }

        public function delete($id=null){
            if (!isset($id)) show_404();
            
            if ($this->laporan_model->delete($id)) {
                $data["laporan"] = $this->laporan_model->getAll();
                $this->load->view("tampilan_view", $data);
            }
        }

    }
?>