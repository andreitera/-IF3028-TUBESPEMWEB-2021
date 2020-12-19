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

}

?>
