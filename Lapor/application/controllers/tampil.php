<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tampil extends CI_Controller
{
    public $nama_tabel = 'lapor';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index($id)
    {
        $data['lapor'] = $this->post_model->get_lapor($id);
        // $this->load->view('pages/laporan', $data);
    }

    public function view($id)
    {
        $data['post_item'] = $this->post_model->get_lapor($id);
        $this->load->view('template/header');
        $this->load->view('pages/laporan', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $this->load->view('template/header');
        $this->load->view('pages/add');
        $this->load->view('template/footer');
    }

    public function input()
    {
        $isi = $this->input->post('isi-laporan');
        $aspek = $this->input->post('aspek');
        $file = $_FILES['file']['name'];

        if ($file = '') {
        } else {
            $config['upload_path']   = './file/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name']    = date('Y-m-d H-i-s', time());
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $file = $this->upload->data('file_name');
            } else {
            }

            $data = array(
                'isi'       => $isi,
                'aspek'     => $aspek,
                'file'  => $file
            );

            $this->post_model->input_laporan($this->nama_tabel, $data);
            redirect('');
        }
    }

    public function delete($id)
    {
        $deleted_row = array('id' => $id);
        $this->post_model->hapus_data($deleted_row, $this->nama_tabel);
        redirect('');
    }

    public function edit($id)
    {
        $searchkey = array('id' => $id);
        $data['laporan'] = $this->post_model->get_lapor($id);
        $this->load->view('template/header');
        $this->load->view('pages/edit', $data);
        $this->load->view('template/footer');
    }

    public function update($id)
    {
        $isi = $this->input->post('isi_lapor');
        $aspek = $this->input->post('aspek');
        $data = array(
            'isi'   => $isi,
            'aspek' => $aspek
        );
        $searchkey = array('id' => $id);
        $this->post_model->update_data($searchkey, $data, $this->nama_tabel);
        redirect('laporan/view/' . $id);
    }

    public function search()
    {
        $keyword = $this->input->get('keyword');
        $data['result'] = $this->post_model->search_data($keyword, $this->nama_tabel);
        $this->load->view('template/header');
        $this->load->view('pages/search_result', $data);
        $this->load->view('template/footer');
    }
}
