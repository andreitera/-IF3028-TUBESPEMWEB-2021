<?php
  defined ('BASEPATH') or exit ('No Direct Script Allowed');
  class User extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Model');
      $this->load->model('Model_data', 'md');
    }

    public function index()
    {
      if ($this->session->userdata('username')==NULL)
      {
        $this->session->set_flashdata('message' ,'Login Dulu');
        redirect('home');
      }
      else
      {
        if ($this->Model->isLoginExpired())
        {
          $this->session->set_flashdata('message', 'Login sesi telah habis');
          redirect('user/logout');
        }
        else
        {
          $sessionUser = $this->session->userdata('username');
          if ($sessionUser=='admin')
          {
            $isi['profil'] = $this->md->getdataadmin();
            $isi['data'] = $this->md->getdatalapor();
            $isi['content'] = 'admin/index';
            $this->session->set_flashdata('message', 'Berhasil Login');
            $this->load->view('templates/template_home', $isi);
          }
          else
          {
            $isi['data'] = $this->md->getdatalapor();
            $isi['content'] = 'user/index';
            $this->load->view('templates/template_home', $isi);
          }
        }
      }
    }

    public function logout()
    {
      if ($this->session->flashdata('message')!=NULL)
      {
        $this->session->set_flashdata('message', 'Login sesi telah habis');
        $this->session->unset_userdata('username');
        redirect('home');
      }
      else
      {
        $this->session->set_flashdata('message', 'Sukses Logout');
        $this->session->unset_userdata('username');
        redirect('home');
      }
    }

  }


 ?>
