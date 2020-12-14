<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Berita_model extends CI_Model{

	function simpan($isi,$file,$aspek,$waktu){
		$hsl=$this->db->query("INSERT INTO laporan (id_laporan,isi,aspek,file,waktu) VALUES ('','$isi','$aspek','$file','$waktu')");
		return $hsl;
	}

	public function total(){
		$this->db->select(	'*');
		$this->db->from('laporan');
		$this->db->order_by('id_laporan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function berita($limit,$start){
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->order_by('id_laporan','DESC');
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		return $query->result();
	}

	public function read($slug_berita){
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where(array('id_laporan' =>	$slug_berita  ));
		$this->db->order_by('id_laporan','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	public function detail($id_laporan){
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('id_laporan',$id_laporan);
		$this->db->order_by('id_laporan');
		$query = $this->db->get();
		return $query->row();
	}

	public function delete($data){
		$this->db->where('id_laporan',$data['id_laporan']);
		$this->db->delete('laporan',$data);
	}

}