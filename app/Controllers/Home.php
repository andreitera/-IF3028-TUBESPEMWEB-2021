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
		$data['laporan'] = $this->homeModel->get();
		echo view('templates/header');
		echo view('index', $data);
		echo view('templates/footer');
	}

	public function view($id)
	{
		$data['item'] = $this->homeModel->get($id);
		
		echo view('templates/header');
		echo view('detail', $data);
		echo view('templates/footer');
		
	}

	public function create()
	{
		echo view('templates/header');
		echo view('create');
		echo view('templates/footer');
	}

	public function edit($id) {
		$data['item'] = $this->homeModel->get($id);

		echo view('templates/header');
		echo view('update', $data);
		echo view('templates/footer');
	}

	public function save($id = false)
	{	
		$fileLampiran = $this->request->getFile('lampiran');
		$fileLampiran->move('assets/uploaded_file');
		$namaLampiran = $fileLampiran->getName();
		if($id) {
			$this->homeModel->save([
				'id' => $id,
				'isi' => $this->request->getPost('konten'),
				'aspek' => $this->request->getPost('aspek'),
				'lampiran' => $namaLampiran
			]);
		} else {
			$this->homeModel->save([
				'isi' => $this->request->getPost('konten'),
				'aspek' => $this->request->getPost('aspek'),
				'lampiran' => $namaLampiran
			]);
		}
		return redirect()->to('/');
	}
	
	public function detail()
	{
		echo view('templates/header');
		echo view('detail');
		echo view('templates/footer');
	}
	
	public function delete($id)
	{
		$data['item'] = $this->homeModel->get($id);
		$file = $data['item']['lampiran'];
		unlink("assets/uploaded_file/$file");
		$this->homeModel->delete($id);
		return redirect()->to('/');
	}
	//--------------------------------------------------------------------

}
