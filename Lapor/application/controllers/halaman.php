<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman extends CI_Controller
{
    public function index($page = 'home')
    {
    	$this->load->model('post_model');
        $data['lapor'] = $this->post_model->get_lapor();

        $this->load->helper('url');
        // $this->load->view('template/header');
        $this->load->view('tampilan/'.$page, $data);
        // $this->load->view('template/footer');
    }
}
