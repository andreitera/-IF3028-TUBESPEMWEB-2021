<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampil extends CI_Controller
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
        $data['post_item'] = $this->post_model->get_lapor($id);
    }

    public function view($id)
    {
        $data['post_item'] = $this->post_model->get_lapor($id);
        $data1['lapor'] = $this->post_model->get_lapor();
        $this->load->view('tampilan/header', $data1);
        $this->load->view('halaman/tampil', $data);
        $this->load->view('tampilan/footer');
    }

    public function tambah()
    {
        $data1['lapor'] = $this->post_model->get_lapor();
        $this->load->view('tampilan/header', $data1);
        $this->load->view('halaman/tambah');
        $this->load->view('tampilan/footer');
    }

    public function input()
    {
        $isi = $this->input->post('isi-laporan');
        $aspek = $this->input->post('aspek');
        $file_lapor = $_FILES['file_lapor']['name'];

        if ($file_lapor = '') {
        } else {
            $config['upload_path']   = './lampiran/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name']    = date('Y-m-d H-i-s', time());
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_lapor')) {
                $file_lapor = $this->upload->data('file_name');
            } else {
            }

            $data = array(
                'isi'       => $isi,
                'aspek'     => $aspek,
                'file_lapor'  => $file_lapor
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
        $data['tampil'] = $this->post_model->get_lapor($id);
        $data1['lapor'] = $this->post_model->get_lapor();
        $this->load->view('tampilan/header', $data1);
        $this->load->view('halaman/ubah', $data);
        $this->load->view('tampilan/footer');
    }

    public function update($id)
    {
        $isi = $this->input->post('isi_lapor');
        $aspek = $this->input->post('aspek');
        $data = array(
            'isi'   => $isi,
            'aspek' => $aspek,
            'file_lapor'   => $file_lapor
        );
        $searchkey = array('id' => $id);
        $this->post_model->update_data($searchkey, $data, $this->nama_tabel);
        redirect('tampil/view/' . $id);
    }

    public function search()
    {
        $keyword = $this->input->get('keyword');
        $data['result'] = $this->post_model->search_data($keyword, $this->nama_tabel);
        $data1['lapor'] = $this->post_model->get_lapor();
        $this->load->view('tampilan/header', $data1);
        $this->load->view('halaman/cari', $data);
        $this->load->view('tampilan/footer');
    }
}