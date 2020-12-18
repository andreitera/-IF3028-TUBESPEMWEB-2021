<?php
    defined("BASEPATH") OR exit("No direct script access allowed");

    class Laporan_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("Laporan_model");
            $this->load->library('form_validation');
        }
        public function index(){
            $data["laporan"] = $this->Laporan_model->getAll();
            $this->load->view("tampilan_view", $data);
        }
    }
?>