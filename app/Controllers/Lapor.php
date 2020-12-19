<?php

namespace App\Controllers;

use App\Models\laporModel;
use CodeIgniter\HTTP\Request;
use CodeIgniter\Model;

class Lapor extends BaseController
{

    public function __construct()
    {
        $this->laporModel = new laporModel();
    }


    public function index()
    {

        $cari = $this->request->getVar('cari');

        if ($cari) {
            $lapor = $this->laporModel->search($cari);
        } else {
            $lapor = $this->laporModel->orderBy('id', 'DESC');
        }

        $data = [
            'judul' => 'LAPOR! - Layanan Aspirasi Masyarakat',

            'lapor' => $lapor->paginate(5, 'lapor'),
            'pager' => $lapor->pager
        ];

        // //konek database
        // $db = \Config\Database::connect();
        // $lapor = $db->query("SELECT * FROM laporan");
        // foreach ($lapor->getResultArray() as $row) {
        //     d($row);
        // }

        // $laporModel = new \App\Models\laporModel();

        return view('lapor/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'judul' => 'Detail LAPOR!',
            'lapor' => $this->laporModel->getLapor($id)
        ];

        if (empty($data['lapor'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Laporan ' . $id . ' tidak ditemukan');
        }

        return \view('lapor/detail', $data);
    }

    public function laporan()
    {

        $lapor = $this->laporModel->orderBy('id', 'DESC');

        $data = [
            'judul' => 'LAPOR! - Layanan Aspirasi Masyarakat',

            'lapor' => $lapor->paginate(5, 'lapor'),
            'pager' => $lapor->pager
        ];

        return view('lapor/laporan', $data);
    }

    public function buatLapor()
    {
        $data = [
            'judul' => "Buat Laporan"
        ];
        return \view('lapor/buatLapor', $data);
    }

    public function save()
    {

        //ambil gambar
        $fileLampiran = $this->request->getFile('lampiran');

        if ($fileLampiran->getError() == 4) {
            $namaLampiran = 'Lampiran Kosong';
        } else {
            // pindahkan gambar ke folder img
            $namaLampiran = $fileLampiran->getRandomName();
            $fileLampiran->move('img', $namaLampiran);
        }

        date_default_timezone_set("Asia/Jakarta");
        $this->laporModel->save([
            'nama' => $this->request->getVar('nama'),
            'isi' =>  $this->request->getVar('isi'),
            'aspek' => $this->request->getVar('aspek'),
            'lampiran' => $namaLampiran,
            'created_at' => date("Y-m-d H:i:s")
        ]);
        return \redirect()->to('/lapor');
    }

    public function delete($id)
    {
        $lapor = $this->laporModel->find($id);

        if ($lapor['lampiran'] != 'Lampiran Kosong') {
            unlink('img/' . $lapor['lampiran']);
        }


        $this->laporModel->delete($id);
        return redirect()->to('/lapor');
    }


    public function edit($id)
    {
        $data = [
            'judul' => "Buat Laporan",
            'lapor' => $this->laporModel->getLapor($id)
        ];
        return \view('lapor/edit', $data);
    }

    public function update($id)
    {
        date_default_timezone_set("Asia/Jakarta");

        $fileLampiran = $this->request->getFile('lampiran');

        if ($fileLampiran->getError() == 4) {
            $namaLampiran = $this->request->getVar('lampiranLama');
        } else {
            $namaLampiran = $fileLampiran->getRandomName();
            $fileLampiran->move('img', $namaLampiran);
        }


        $this->laporModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'isi' =>  $this->request->getVar('isi'),
            'aspek' => $this->request->getVar('aspek'),
            'lampiran' => $namaLampiran,
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        return \redirect()->to('/lapor/' . $id);
    }
}
