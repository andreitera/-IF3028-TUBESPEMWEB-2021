<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model{
    private $_table = "laporan";

    public $id;
    public $isi;
    public $aspek;
    public $lampiran;
    public $waktu;

    public function rules(){
        return [
            ['field' => 'isi',
            'label' => 'Isi',
            'rules' => 'required'],

            ['field' => 'aspek',
            'label' => 'Aspek',
            'rules' => 'required'],

            ['field' => 'lampiran',
            'label' => 'Lampiran',
            'rules' => 'required']
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save(){

        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->isi = $post["isi"];
        $this->aspek = $post["aspek"];
        $this->lampiran = $post["lampiran"];
        date_default_timezone_set('Asia/Jakarta');
        $this->waktu = date("Y-m-d H:m:s");
        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input_>post();
        $this->id = $post["id"];
        $this->isi = $post["isi"];
        $this->aspek = $post["aspek"];
        $this->lampiran = $post["lampiran"];
        $this->waktu = $post["waktu"];
        return $this->db->update($this->_table, $this, array('id' => $post["id"]));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
?>