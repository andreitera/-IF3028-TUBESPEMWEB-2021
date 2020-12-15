<?php
class Cari_model extends CI_model{

    public function cariData($keyword = null)
	{
		if($keyword){
			$this->db->like('laporan', $keyword);
			$this->db->or_like('aspek',$keyword);
		}
		$this->db->order_by("id_lapor", "desc");

		return $this->db->get('simple_lapor',4)->result_array();
		// $cari = $this->input->GET('cari', TRUE);
		// $data = $this->db->query("SELECT * from simple_lapor where laporan like '%$cari%' ");
		// return $data->result_array();

			// $this->db->select('*');
			// $this->db->from('simple_lapor');
			// $this->db->like('laporan',$keyword);
			// $this->db->or_like('aspek',$keyword);
			// return $this->db->get()->result();
	}



}

?>
