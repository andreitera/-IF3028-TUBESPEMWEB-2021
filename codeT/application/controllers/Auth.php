<?php

	class Auth extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
		}

		public function index(){
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');

			if ($this->form_validation->run() == false) {
				$data['judul'] = 'Login';
				$data['link'] = 'home';
				$this->load->view('templates/header', $data);
				$this->load->view('auth/login');
				$this->load->view('templates/footer');
			}else{
				$this->login();
			}
		}

		private function login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('user', ['username' => $username])->row_array();
			if ($user) {
				if ($password == $user['password']) {
					$data = [
					'username' => $user['username']
					];
					
					$this->session->set_userdata($data);
					redirect('user');
				}else{
					$this->session->set_flashdata('message', 'Password anda salah');
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('message', 'Username anda salah!');
				redirect('auth');
			}
		}
		
		public function register(){
			$this->form_validation->set_rules('username', 'username', 'required|is_unique[user.username]');
			$this->form_validation->set_rules('password', 'password', 'required|min_length[3]');
				if ($this->form_validation->run() == false) {
					$data['judul'] = 'Resgister';
					$data['link'] = 'home';
					
					$this->load->view('templates/header', $data);
					$this->load->view('auth/register');
					$this->load->view('templates/footer');
				}else{
					$data = [
					'username' => $this->input->post('username', true),
					'password' => $this->input->post('password')
					];
					
					$this->db->insert('user', $data);
					$this->session->set_flashdata('message', 'Berhasil Registrasi');
					redirect('auth');
				}
			}

		public function logout(){
			$this->session->unset_userdata('username');
			redirect('home');
		}
	}
?>
