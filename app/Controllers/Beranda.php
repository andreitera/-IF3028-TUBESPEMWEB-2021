<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Beranda extends BaseController
{
	protected $laporanModel;
	public function __construct()
	{
		$this->laporanModel = new LaporanModel();
	}

	public function index()
	{
		$laporan = $this->laporanModel->findAll();

		$data = [
			'title' => 'Beranda',
			'laporan' => $laporan
		];

		return view('beranda', $data);
	}

	public function detail($id = '')
	{
		// $laporan = $this->laporanModel->where(['id' => $id])->first();

		$data = [
			'title' => 'Detail Laporan',
			'laporan' => $this->laporanModel->getLaporan($id)
		];

		if (empty($data['laporan'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Laporan tidak ditemukan');
		}

		return view('detailLaporan', $data);
	}

	public function buatLaporan()
	{
		$data = ['title' => 'Buat Laporan'];

		return view('buat', $data);
	}

	public function buat()
	{
		$fileLampiran = $this->request->getFile('lampiran');
		$fileLampiran->move('img');
		$namaLampiran = $fileLampiran->getName();

		$this->laporanModel->save([
			'isi_laporan' => $this->request->getVar('isiLaporan'),
			'aspek' => $this->request->getVar('aspek'),
			'lampiran' => $namaLampiran
		]);

		session()->setFlashdata('pesan', 'Laporan berhasil ditambahkan!');

		return redirect()->to('/');
	}

	//--------------------------------------------------------------------

}
