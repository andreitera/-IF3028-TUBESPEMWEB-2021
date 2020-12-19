<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
    }

    public function index()
    {
        $data['laporan'] = $this->menu_model->laporan();
        $this->load->view('menu/index', $data);
    }
}
