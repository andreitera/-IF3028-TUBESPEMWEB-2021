<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Authm extends CI_Controller
{

public function index()
{
  if ($this->session->userdata('status') != "login")
		{
			$this->load->view('beranda');
    	}
		else
		{
    	redirect('authm/login');
    }
}

function login()
{
    $username = $this->input->post('nim');
		$password = $this->input->post('password');
		$where = array(
			'nim' => $username,
			'password' => md5($password),
      'verif' => "1"
			);
		$user_id = $this->user_model->cek_login("mahasiswa",$where)->num_rows();
		if($user_id > 0){
		$data_session = array(
				'nim' => $username,
				'user_id' => $user_id,
				'status' => "login"
				);
		$this->session->set_userdata($data_session);
		redirect('mahasiswa/beranda');
		}
		else
		{
			$this->session->set_flashdata('login', 'Gagal masuk. Akun tidak terdaftar atau belum diverifikasi!');
			redirect('guest');
		}
}

function logout()
{
  $this->session->sess_destroy();
  redirect('guest');
}


}
 ?>
