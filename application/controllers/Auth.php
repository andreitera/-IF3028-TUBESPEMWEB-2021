<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Auth extends CI_Controller
{

public function index()
{
  if ($this->session->userdata('status') != "login")
		{
			$this->load->view('admin/login');
    	}
		else
		{
    	redirect('admin/beranda');
    }
}


function login()
{
    $username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$user_id = $this->admin_model->cek_login("admin",$where)->num_rows();
		if($user_id > 0){
		$data_session = array(
				'nama' => $username,
				'user_id' => $user_id,
				'status' => "login"
				);
		$this->session->set_userdata($data_session);
		redirect('admin/beranda');
		}
		else
		{
			$this->session->set_flashdata('login', 'Gagal masuk. Coba lagi!');
			redirect('auth');
		}
}

function logout()
{
  $this->session->sess_destroy();
  redirect('auth');
}


}
 ?>
