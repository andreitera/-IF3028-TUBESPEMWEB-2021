<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Detail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('detail_model');
    }

    public function index($id)
    {
        $data['laporan'] = $this->detail_model->detail_laporan($id);
        $this->load->view('detail/index', $data);
    }

    public function hapus_data($id)
    {
        $hapus = array('id' => $id);
        $this->detail_model->delete_data($hapus, 'laporan');
        redirect('menu');
    }

    public function cari()
    {
        $data['cari'] = $this->detail_model->cari_kata();
        $this->load->view('hasil/index', $data);
    }
}
