<?php

defined('BASEPATH') or exit('No direct script access allowed');

class lapor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_lapor');
    }

    function index()
    {
        $data['lapor'] = $this->m_lapor->tampil_lapor()->result();
        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

    function edit($id)
    {
        $data['lapor'] = $this->m_lapor->tampil_detail($id)->result();
        $this->load->view('header');
        $this->load->view('edit', $data);
        $this->load->view('footer');
    }

    function tentang()
    {
        $this->load->view('header');
        $this->load->view('tentang');
        $this->load->view('footer');
    }

    function buat_lapor()
    {
        $this->load->view('header');
        $this->load->view('buat');
        $this->load->view('footer');
    }

    function input_lapor()
    {
        date_default_timezone_set("Asia/Jakarta");
        $file = $_FILES['lampiran']['name'];
        $tmp = $_FILES['lampiran']['tmp_name'];

        $path = "assets/lampiran/" . $file;

        if (move_uploaded_file($tmp, $path)) {
            $laporan = $this->input->post('komen');
            $aspek = $this->input->post('aspek');
            $waktu = date("Y-m-d H:i:s");

            $data = array(
                'laporan' => $laporan,
                'aspek' => $aspek,
                'lampiran' => $file,
                'waktu' => $waktu
            );

            $this->m_lapor->simpan_lapor($data);
        } else {
            echo "Laporan tidak tersimpan";
        }
        redirect('lapor/index');
    }

    function detail($id)
    {
        $data['lapor'] = $this->m_lapor->tampil_detail($id)->result();
        $this->load->view('header');
        $this->load->view('tampilan', $data);
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_lapor->hapus_data($where, 'lapor');
        redirect('lapor/index');
    }
}
