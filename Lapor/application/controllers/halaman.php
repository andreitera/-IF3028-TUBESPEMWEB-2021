<?php
defined('BASEPATH') or exit('No direct script access allowed');

class halaman extends CI_Controller
{
    public function index($page = 'home')
    {
        $data['lapor'] = $this->post_model->get_lapor();

        $this->load->helper('url');
        $this->load->view('template/header');
        $this->load->view('halaman/' . $page, $data);
        $this->load->view('template/footer');
    }
}
