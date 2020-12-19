<?php
  defined ('BASEPATH') or exit ('No Direct Script Allowed');
  class Login extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Model');
    }

    public function index()
    {
      if ($this->session->userdata('username')!=NULL)
      {
        redirect('user');
      }
      $isi['data'] = $this->md->getdatalapor();
      $isi['content'] = 'home/content';
      $this->session->set_flashdata('message', 'Login Dulu');
      $this->load->view('templates/template_home', $isi);
    }

    public function ceklogin()
    {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $getuser = $this->Model->getakun($username,$password);
      if($getuser->num_rows()>0)
      {
        $data =
        [
            'username'=>$username,
            'password'=>$password,
            'loggedin_time'=>time()
        ];
        $this->session->set_userdata($data);
        redirect('user');
      }
      else
      {
        $this->session->set_flashdata('message', 'User tidak terdaftar');
        redirect('Home');
      }
    }
  }
 ?>
