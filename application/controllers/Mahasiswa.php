<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Mahasiswa extends CI_Controller
{

  function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			$url = base_url('guest');
			redirect($url);
		};
	}

  public function index()
  {
    redirect('mahasiswa/beranda');
  }

  function beranda()
  {
    $keyword = '';
    $this->load->model('guest_model');
    if ($this->input->post('keyword')) {
      $keyword = $this->input->post('keyword');
    }
    $data['laporan'] = $this->guest_model->list_data($keyword)->result_array();

    $this->load->view('mahasiswa/daftarlapor', $data);
  }

  function ubah($nim)
  {
    $data['mahasiswa'] 	= $this->user_model->getinfomhs($nim);
    $this->load->view('mahasiswa/ubah', $data);
  }

  function edit($nim)
  {
    $this->load->view('mahasiswa/ubah');
    $this->user_model->editinfomhs();
    $this->session->set_flashdata('pesan', 'Data Berhasil Diperbarui.');
    redirect('mahasiswa/beranda');
  }

  function buatlaporan($nim)
  {
    $data['mahasiswa'] 	= $this->user_model->getinfomhs($nim);
    $this->load->view('mahasiswa/buatlaporan');
  }

  function lapor()
  {
    $this->user_model->tambahlaporan();
    $this->session->set_flashdata('pesan', 'Laporan berhasil dikirim.');
    redirect('mahasiswa/beranda');
  }





}

 ?>
