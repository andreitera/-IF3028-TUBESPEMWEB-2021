<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Admin extends CI_Controller
{

  function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			$url = base_url('auth');
			redirect($url);
		};
	}

  function pengaturan()
  {
    $this->load->view('admin/pengaturan');
  }

  function gantipw()
  {
    $password = $this->input->post('password');
    $password_hash = md5($password);
    $this->admin_model->gantipassword("admin", $password_hash);
    $this->session->set_flashdata('pesan', 'Kata Sandi Berhasil Diubah.');
    redirect('admin/beranda');
  }

  function mahasiswa()
  {
    $keyword = '';
    $this->load->model('admin_model');
    if ($this->input->post('keyword')) {
      $keyword = $this->input->post('keyword');
    }
    $data['mhs'] = $this->admin_model->list_mhs($keyword)->result_array();
    $this->load->view('admin/daftarmahasiswa', $data);
  }

  public function hapus($nim)
  {
    $this->mahasiswa_model->hapusmhs($nim);
    $this->session->set_flashdata('pesan', 'Data berhasil dihapus.');
    redirect('admin/mahasiswa');
  }

  function verif($nim)
  {
    $this->mahasiswa_model->aktivasi($nim);
    $this->session->set_flashdata('pesan', 'Aktivasi berhasil.');
    redirect('admin/mahasiswa');
  }

  function unverif($nim)
  {
    $this->mahasiswa_model->unaktivasi($nim);
    $this->session->set_flashdata('pesan', 'Unaktivasi berhasil.');
    redirect('admin/mahasiswa');
  }

  function beranda()
  {
    $keyword = '';
    $this->load->model('guest_model');
    if ($this->input->post('keyword')) {
      $keyword = $this->input->post('keyword');
    }
    $data['laporan'] = $this->guest_model->list_data($keyword)->result_array();

    $this->load->view('admin/daftarlaporan', $data);
  }

  function detail($nim)
  {
    $data['laporan'] = $this->admin_model->getinfolaporan($nim);
    $data['mahasiswa'] = $this->mahasiswa_model->getinfomhs($nim);
    $this->load->view('admin/detail', $data);
  }

  function hapusl($id_laporan)
  {
    $data['laporan'] = $this->admin_model->getinfolaporan($id_laporan);
    $file = $data['laporan']['lampiran'];
    unlink(FCPATH.'assets/lampiran/'.$file);

    $this->admin_model->hapuslaporan($id_laporan);
    $this->session->set_flashdata('pesan', 'Laporan berhasil dihapus.');
    redirect('admin/beranda');
  }

  function prosesl($id_laporan)
  {
    $this->admin_model->proses($id_laporan);
    $this->session->set_flashdata('pesan', 'Laporan berhasil diproses.');
    redirect('admin/beranda');

  }






}

 ?>
