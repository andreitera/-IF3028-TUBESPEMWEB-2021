<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Koneksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_crud");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data["laporan"] = $this->m_crud->getAll();
        $this->load->view("tampil_awal", $data);
    }

    public function add()
    {
        $laporan = $this->Laporan_model;
        $validation = $this->form_validation;
        $validation->set_rules($laporan->rules());

        if ($validation->run()) {
            $laporan->save();
            $this->session->set_flashdata('success', 'Berhasil dikirim');
        }
    }

    public function tambah()
    {
        $this->load->view("tampil_tambah");
    }

    public function detail()
    {
        $this->load->view("tampil_detail");
    }
}
