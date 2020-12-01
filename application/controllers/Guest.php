<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class Guest extends CI_Controller
{

public function index()
{
  $this->load->view('beranda');
}

function cari()
{
  $keyword = '';
  $this->load->model('guest_model');
  if ($this->input->post('keyword')) {
    $keyword = $this->input->post('keyword');
  }
  $data['laporan'] = $this->guest_model->list_data($keyword)->result_array();
  $this->load->view('laporan', $data);
}

function regis()
{
  $nim = $this->input->post('nim');
  $where = array('nim' => $nim );
  $user_id = $this->guest_model->cek_akun("mahasiswa",$where)->num_rows();
  if ($user_id > 0) {
    $this->session->set_flashdata('daftar', 'NIM Telah Digunakan!');
  } else {
    $this->guest_model->regism();
    $this->session->set_flashdata('daftar', 'Pendaftaran Sedang Diproses!');
  }
  redirect('guest');
}

}


 ?>
