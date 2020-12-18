<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Laporan extends ResourceController
{
    protected $modelName = 'App\Models\LaporanModel';
    protected $format    = 'json';

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function insertDAta()
    {
        $pelatihanModel = new \App\Models\LaporanModel();
        if ($this->request->getPost()) {
            $validasi = $this->request->getPost();
            $this->validation->run($validasi, 'laporan');

            $errors = $this->validation->getErrors('laporan');

            if (!$errors) {

                $upload = $this->request->getFile('lampiran');
                $lampiran = $upload->getRandomName();
                $data = [
                    'laporan' => $this->request->getPost('laporan'),
                    'aspek_pelapor' => $this->request->getPost('aspek_pelapor'),
                    'lampiran' => $lampiran,
                    'created_date' => date("Y-m-d H:i:s")
                ];
                $pelatihanModel->insert($data);
                $upload->move(ROOTPATH . 'public/lampiran', $lampiran);

                // return redirect()->to(site_url('/index'));
            } else {
                $this->session->setFlashdata('errors', $errors);
            }
        }
        return redirect()->to(site_url('home/index'));
    }

    public function updateData()
    {
        // helper('form');
        // $API = $this->request->uri->getSegment(3);
        // $dataprojek = new \App\Models\LaporanModel();
        // $projek = $dataprojek->where('token', $API)->first();

        //     $data1 = $this->request->getGetPost('datafield_1');
        //     $data2 = $this->request->getGetPost('datafield_2');
        //     $data3 = $this->request->getGetPost('datafield_3');

        // $data = [
        //     'datafield_1' => $data1,
        //     'datafield_2' => $data2,
        //     'datafield_3' => $data3,
        // ];
        // return $this->model->updateData($data, $API);
    }

    public function fetch()
    {
        $id = $this->request->uri->getSegment(3);
        $dataprojek = new \App\Models\LaporanModel();

        $projek = $dataprojek->queryData();
        return $this->respond($projek);
    }

    public function deleteData()
    {
        $id = $this->request->uri->getSegment(3);
        $dataprojek = new \App\Models\LaporanModel();

        $projek = $dataprojek->deleteData($id);
        return redirect()->to(site_url('home/index'));
    }
}
