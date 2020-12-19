<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Laporan extends ResourceController
{
    protected $modelName = 'App\Models\LaporanModel';

    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function deleteData(){
        $id = $this->request->uri->getSegment(3);
        $datalaporan = new \App\Models\LaporanModel();

        $hapus = $datalaporan->deleteData($id);
        return redirect()->to(site_url('home/index'));
    }
}
