<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("control_model");
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['laporan'] = $this->control_model->read();
        $this->load->view("pages/homepage", $data);
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['laporan'] =  $this->control_model->search_laporan($keyword);
        $this->load->view('pages/homepage', $data);
    }

    public function lihat($id)
    {
        $data['laporan'] = $this->control_model->view_by($id);
        $this->load->view('pages/view_detail', $data);
    }

    public function tambah()
    {
        $upload = $this->control_model->upload();
        $this->control_model->create($upload);
        redirect('control');
    }

    public function lihat2($id)
    {
        $data['laporan'] = $this->control_model->view_by($id);
        $this->load->view('pages/edit', $data);
    }

    public function ubah($id)
    {
        $upload = $this->control_model->upload();
        $this->control_model->update($id, $upload);
        redirect(base_url());
    }

    public function hapus($id)
    {
        $this->control_model->delete($id);
        redirect('control');
    }

    public function report()
    {
        $this->load->view("pages/report");
    }

    public function view_detail($id)
    {
        $detail = $this->control_model->get_by_id_laporan($id);
        $data   = array(
            "detail" => $detail
        );
        $this->load->view("pages/view_detail", $data);
    }
    
    public function edit()
    {
        $this->load->view("pages/edit");
    }
}
