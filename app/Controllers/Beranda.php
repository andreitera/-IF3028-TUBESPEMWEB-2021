<?php

namespace App\Controllers;

class Beranda extends BaseController
{
	public function index()
	{
		return view('beranda');
	}
	public function detail($id)
	{
		$data = [
			'title' => 'Detail Laporan',
			'laporan' => $this->laporanModel->getLaporan($id)
		];

		if (empty($data['laporan'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Laporan tidak ditemukan');
		}

		return view('detailLaporan', $data);
	}

	//--------------------------------------------------------------------

}
