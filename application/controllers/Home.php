<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Lapor_model');
    }
    public function index()
    {
        $data['lapor'] = $this->Lapor_model->tampil_data();
        $this->load->view('home', $data);
    }

    public function view($id)
    {
        $data['lapor'] = $this->Lapor_model->tampil_data($id);
        $this->load->view('detaillaporan/Details', $data);
    }

    function Tampillapor()
    {
        $this->load->view('Buatlapor/Tampillapor');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->Lapor_model->hapus_data($where, 'lapor');
        redirect('Home');
    }

    public function search_detail($id)
    {
        $data['lapor'] = $this->Lapor_model->search_model($id);
        $this->load->view('detaillaporan/Details', $data);
    }

    public function update_data($id)
    {
        $data['lapor'] = $this->Lapor_model->search_model($id);
        $this->load->view('tampilan_ubah', $data);
    }

    function tambahLaporan()
    {
        $this->form_validation->set_rules('laporan', 'Laporan', 'required', array('required' => 'Isi Laporan anda disini'));
        if ($this->form_validation->run() != false) {
            $config['upload_path']            =    './asset/';
            $config['allowed_types']        =    'jpeg|jpg|png|gif|pdf';
            $config['max_size']                =    10000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $laporan    = $this->input->post('laporan');
            $aspek      = $this->input->post('aspek');

            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('lapor', $error);
                return 0;
                $this->session->set_flashdata('error_upload_Images', 'gagal upload Images');
            } else {
                $data   = array('upload_data' => $this->upload->data());
                $name = $data['upload_data'];

                $data = array(
                    'id'        => $this->session->userdata('id'),
                    'laporan'   => $laporan,
                    'aspek'     => $aspek,
                    'file'      => $name['file_name'],
                );
            }

            $this->Lapor_model->uploadLaporan('lapor', $data);
            $this->session->set_flashdata('success', 'Artikel Berhasil ditambahkan');
            redirect('home/index', 'refresh');
            return 0;
        }
    }

    function ubah($id)
    {

        $this->form_validation->set_rules('isi', 'Isi', 'required|min_length[250]');
        if ($this->form_validation->run() == FALSE) {
            $data['aspek'] = ['', '', '', '', ''];
            $data['lapor'] = $this->Lapor_model->detail($id);
            $this->load->view('tampilan_ubah', $data);
        } else {
            $this->Lapor_model->ubah($id);
            echo "
                <script>
                    alert('berhasil mengubah data');
                    document.location.href='../';
                </script>
                ";
        }
    }
}
