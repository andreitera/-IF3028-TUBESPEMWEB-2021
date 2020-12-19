<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLapor extends CI_Model
{
	public function GetLapor()
	{
		$data = $this->db->query('select * from lapor');

		return $data->result_array();
	}

	public function InsertData($data)
	{
		$isi = $this->db->insert('lapor', $data);

		return $isi;
	}

	public function UpdateData($data, $where)
	{
		$isi = $this->db->update('lapor', $data, $where);

		return $isi;
	}

	public function DeleteData($where)
	{
		$isi = $this->db->delete('lapor', $where);

		return $isi;
	}

	public function GetData($where)
	{
		$isi = $this->db->query('select * from lapor where id=' . $where);

		return $isi;
	}
}
