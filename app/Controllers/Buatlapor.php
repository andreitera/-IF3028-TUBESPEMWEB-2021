<?php namespace App\Controllers;

use Config\App;

class Buatlapor extends BaseController
{
	public function __construct()
	{
		helper('form');
	}
	public function index()
	{
		//$data = new \App\Models\LaporanModel();
		//$all = $data->findAll();
		return view('buatlapor/index');
	}

	public function buatlaporan()
	{
			$laporanModel = new \App\Models\LaporanModel();

			$upload = $this->request->getFile('file_laporan');
			$lampiran = $upload->getRandomName();
			$data = [
					'laporan' => $this->request->getPost('lapor'),
					'aspek_pelapor' => $this->request->getPost('aspek'),
					'lampiran' => $lampiran,
					'created_date' => date("Y-m-d H:i:s")
				];
			$laporanModel->insert($data);
			$upload->move(ROOTPATH . 'public/lampiran', $lampiran);
			return redirect()->to(site_url('home/index'));
	}

}
