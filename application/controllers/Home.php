<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Lapor_model');
    }

    public function index()
    {
        $this->load->view('home');
    }

    function Tampillapor()
    {
        $this->load->view('Tampillapor');
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
        //validasi form
        $this->form_validation->set_rules('isi', 'Isi', 'required|min_length[250]');
        if ($this->form_validation->run() == FALSE) {
            $data['aspek'] = ['', '', '', '', ''];
            $data['lapor'] = $this->Lapor_model->detail($id);
            $this->load->view('tampilan_ubah', $data);
            //redirect("index.php/Home/detail2/$id");

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
