<?php

namespace App\Controllers;

use App\Models\LaporModel;

class Lapor extends BaseController
{
    public function __construct()
    {
        $this->lapor = new LaporModel();
    }

    public function index()
    {
        $model = new LaporModel();
        $data['lapor'] = $model->getLapor();
        echo view('pages/home', $data);
    }

    public function detil($id)
    {
        $data['lapor'] = $this->lapor->getLapor($id);
        return view('pages/detil', $data);
    }

    public function buatlapor()
    {
        return view('pages/buatlapor');
    }

    public function simpan()
    {
        $isi = $this->request->getPost('isi');
        $lampiran = $this->request->getFile('lampiran');
        $aspek = $this->request->getPost('aspek');

        $lampiran->move(WRITEPATH . '../public/gambar');
        $data = [
            'isi' => $isi,
            'lampiran' => $lampiran->getName(),
            'aspek' => $aspek
        ];
        $simpan = $this->lapor->tambahLapor($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Laporan telah dibuat');
            return redirect()->to(base_url());
        }
    }

    public function edit($id)
    {
        $data['lapor'] = $this->lapor->getLapor($id);
        return view('pages/editlapor', $data);
    }
    //--------------------------------------------------------------------

    public function update($id)
    {
        $isi = $this->request->getPost('isi');

        $aspek = $this->request->getPost('aspek');

        $lampiran = $this->request->getFile('lampiran');
        if ($lampiran->getError() == 4) {
            $namalampiran = $this->request->getVar('old');
        } else {
            $lampiran->move(WRITEPATH . '../public/gambar');
        }

        $data = [
            'isi' => $isi,
            'lampiran' => $namalampiran,
            'aspek' => $aspek
        ];

        $ubah = $this->lapor->update_lapor($data, $id);

        if ($ubah) {
            session()->setFlashdata('info', 'Laporan berhasil di Update');
            return redirect()->to(base_url());
        }
    }

    public function delete($id)
    {
        $hapus = $this->lapor->delete_lapor($id);

        if ($hapus) {
            session()->setFlashdata('warning', 'Laporan berhasil dihapus');
            return redirect()->to(base_url());
        }
    }

    public function search()
    {
        //$keyword = $this->input->post('keyword');
        $keyword = "lorem";
        $listlaporan = $this->lapor->search($keyword);
        $data = array(
            "listlaporan" => $listlaporan
        );
        $this->load->view("search", $data);
    }
}
