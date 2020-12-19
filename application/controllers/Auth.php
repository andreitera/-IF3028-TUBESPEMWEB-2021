<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('user/home');
    }

    public function buatLapor()
    {
        $this->load->view('template/header');
        $this->load->view('user/buatLaporan');
    }
}
