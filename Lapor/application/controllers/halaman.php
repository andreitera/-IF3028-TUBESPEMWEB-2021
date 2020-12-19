<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman extends CI_Controller
{
    public function index($page = 'home')
    {

        $this->load->model('post_model');
        $data['lapor'] = $this->post_model->get_lapor();

        $this->load->helper('url');
        $this->load->view('tampilan/header',$data);
        $this->load->view('halaman/' . $page, $data);
        $this->load->view('tampilan/footer');

    }
}
