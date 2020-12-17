<?php
class User extends CI_Controller
{
  function __construct(){
    parent::__construct();
    $this->load->model('User_model');
    // $this->load->library('database');
  }
  public function index()
  {
    $data['users'] = $this->User_model->getAllUser();
    $this->load->view('user/index', $data);
  }

  public function insert(){
    $this->User_model->insertUserData();
    redirect('user');
    
  }
}
