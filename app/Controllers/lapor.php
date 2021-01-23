<?php

namespace App\Controllers;

use App\Models\lapor_Model;

class lapor extends BaseController
{

    public function index()
    {
        $model = new lapor_Model();
        $data = [
            'getdata' =>  $model->findAll(),
            'title'     => "Buat Laporan",
        ];

        return view('lapor', $data);
    }

    public function simpanData()
    {
        $tmp = $_FILES['lampiran']['tmp_name'];
        $filename = $_FILES['lampiran']['name'];
        // $path = pathinfo($_SERVER['PHP_SELF']);
        // $destination = $path['lampiran'] . '/' . $filename;
        // return var_dump($_FILES);
        move_uploaded_file($tmp, "lampiran/$filename");

        $lapor_model = new lapor_model();
        // $json = $this->request->getJSON();
        // return var_dump($json->laporan);

        $data = [
            'laporan' => $_POST['laporan'],
            'aspek'    => $_POST['aspek'],
            'lampiran'    => "lampiran/$filename"
        ];
        $lapor_model->inputData($data);

        // if ($this->request->isAJAX()) {
        //     $data = [
        //         'laporan' => $this->request->getVar('laporan'),
        //         'aspek'    => $this->request->getVar('aspek'),
        //         'lampiran'    => $this->request->getVar('lampiran')
        //     ];

        // $simpan = $lapor_model->inputData($data);
        //if ($simpan) {
        //     $this->output['sukses'] = true;
        //     $this->output['pesan']  = 'Data ditemukan';
        // }

        //  echo json_encode($this->output);
        //}
    }
    public function detail($id)
    {
        $lapor_model = new lapor_model();
        $data['datalapor'] =  $lapor_model->getdetail($id)->getRow();
        $data['title'] = "Detail Laporan";
        return view('detail', $data);
    }
    public function hapus($id)
    {
        $lapor_model = new lapor_model();
        $lapor_model->hapus($id);
        return redirect()->to('/');
    }
    public function update($id)
    {
        $lapor_model = new lapor_model();
        $data['dataupdate'] = $lapor_model->find($id);
        $data['title'] = "Update Laporan";
        return view('editlapor', $data);
    }
    public function updateSimpan()
    {
        $tmp = $_FILES['lampiran']['tmp_name'];
        $filename = $_FILES['lampiran']['name'];
        move_uploaded_file($tmp, "lampiran/$filename");

        $lapor_model = new lapor_model();

        $id = $_POST['id'];
        $data = [
            'laporan' => $_POST['laporan'],
            'aspek'    => $_POST['aspek'],
            'lampiran'    => "lampiran/$filename"
        ];
        $lapor_model->updatelapor($data, $id);
    }
    public function semualapor()
    {
        $lapor_model = new lapor_model();
        $data['datalapor'] = $lapor_model->semua();

        return view('home', $data);
    }
    public function cari()
    {
        $lapor_model = new lapor_model();
        $x = $_GET['value'];
        $data['datalapor'] =  $lapor_model->cari($x);
        return view('cari', $data);
    }
}
