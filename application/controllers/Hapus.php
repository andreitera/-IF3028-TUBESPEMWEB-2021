<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hapus extends CI_Controller{

    public function index()
    {
        $this->Hapus_model->getHapusLaporan();
        // redirect('home');
     
    }
}

?>