<?php

class M_lapor extends CI_Model
{

    public $id; 
    public $deskripsi;
    public $aspek;
    public $berkas;

    public function rules()
    {
        return [
            ['field' => 'deskripsi',
            'label' => 'Deskripsi',
            'rules' => 'required|min_length[20]'],

            ['field' => 'aspek',
            'label' => 'Aspek',
            'rules' => 'required'],
          
            ];
    }

    //menampilka semua data
	public function get_data()
	{
		$this->db->order_by("created_at","DESC");
		return $this->db->get('laporan')->result_array();
	}

	//upload file
	public function upload_file(){
		$config['upload_path']          = './assets/lampiran/';
		$config['allowed_types']        = 'gif|jpg|png|doc|docx|xls|xlsx|ppt|pptx|pdf';
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		$config['rules']                = 'required';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')) {
			return $this->upload->data("file_name");
		}

	}


	//fungsi Insert ke Database
	public function tambahLaporan(){
		$post = $this->input->post();
		$this->deskripsi = $post['deskripsi'];
		$this->aspek = $post['aspek'];
		$this->berkas = $this->upload_file();
		$this->db->insert('laporan', $this);
	}

	//mengambil id dari data
	public function get_dataById($id){
		return $this->db->get_where('laporan', ['id'=>$id])->row_array();
	}

	//Menghapus data
	public function hapusData($id){
     $this->db->where('id',$id);
     $query = $this->db->get('laporan');
     $row = $query->row();

     unlink("./assets/lampiran/$row->berkas");

     $this->db->delete('laporan', array('id' => $id));
	}

	//mengabil data yang dicari
	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->like('deskripsi', $keyword);
		$this->db->order_by("created_at","DESC");
		return $this->db->get()->result_array();	
	}

}