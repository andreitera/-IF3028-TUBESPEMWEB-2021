<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Lapor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('lapor_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('lapor/index', /*$data*/);
    }

    public function lapor()
    {
        $this->lapor_model->tambah();
    }
}
