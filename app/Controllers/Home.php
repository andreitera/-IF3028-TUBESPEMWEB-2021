<?php namespace App\Controllers;

use App\Models\HomeModel;
class Home extends BaseController
{
	protected $homeModel;
	public function __construct()
	{
		$this->homeModel = new HomeModel();
	}
	public function index()
	{
		$data['laporan'] = $this->homeModel->tampil();
		echo view('templates/header');
		echo view('index', $data);
		echo view('templates/footer');
	}

	public function create()
	{
		echo view('templates/header');
		echo view('create');
		echo view('templates/footer');
	}

	public function save()
	{	
		$fileLampiran = $this->request->getFile('lampiran');
		$fileLampiran->move('assets/uploaded_file');
		$namaLampiran = $fileLampiran->getName();
		$this->homeModel->save([
			'isi' => $this->request->getPost('konten'),
			'aspek' => $this->request->getPost('aspek'),
			'lampiran' => $namaLampiran
		]);
		return redirect()->to('index');
	}
	//--------------------------------------------------------------------

}