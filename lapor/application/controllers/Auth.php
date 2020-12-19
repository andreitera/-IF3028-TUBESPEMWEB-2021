<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Auth_model');
    }
    public function index()
    {
        if($this->input->post('submit')) {
            $data['user'] = $this->Auth_model->cari_Like($this->input->post('search'));
        }
        
        $data['user'] = $this->Auth_model->tampilLapor()->result();
        
        $this->load->view('auth/home', $data);
    }

    public function getData() {
        $data['user'] = $this->Auth_model->tampilLapor()->result();
        return $data;
    }

    public function Buat_Laporan()
    {
        $this->load->view('auth/BuatLaporan');
        
    }

    public function insertLaporan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $komentar = $this->input->post('komentar');
        $tipe = $this->input->post('kategori');
        $file = $this->input->post('file');
        $waktu = date("Y/m/d H:i");

        $data = array(
            'isi' => $komentar,
            'type' => $tipe,
            'file' => $file,
            'tanggal' => $waktu
        );
        $this->Auth_model->inputKomentar($data);
        $this->load->view('auth/header');
        $data['user'] = $this->Auth_model->tampilLapor()->result();
        redirect('auth/');
    }

    function BacaSelengkapnya($id) {
        $data = array(
            'id' => $id
        );
        $hasil['komentar'] = $this->Auth_model->Baca($data)->result();
        $this->load->view('auth/baca', $hasil);
    }

    function hapus($id) {
        $data = array('id' => $id);
	    $this->Auth_model->hapusdata($data);
	    redirect('auth/');
    }

    function edit($id) {
        $data = array(
            'id' => $id
        );
        $hasil['komentar'] = $this->Auth_model->Baca($data)->result();
        $this->load->view('auth/edit', $hasil);
    }


    function update($id){
        date_default_timezone_set('Asia/Jakarta');
        $komentar = $this->input->post('komentar');
        $tipe = $this->input->post('kategori');
        $file = $this->input->post('file');
        $waktu = date("Y/m/d H:i");

        $data = array(
            'isi' => $komentar,
            'type' => $tipe,
            'file' => $file,
            'tanggal' => $waktu
        );
     
        $index = array(
            'id' => $id
        );
     
        $this->Auth_model->update_data($index,$data,'komentar');
        $this->load->view('auth/header');
        $data['user'] = $this->Auth_model->tampilLapor()->result();
        redirect('auth/');
    }
}