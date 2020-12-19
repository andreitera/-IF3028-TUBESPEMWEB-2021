<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends MY_Controller {
  public function home(){
    $this->load->view('home');
  }
  public function thanks(){
    $this->load->view('thanks');
  }
}