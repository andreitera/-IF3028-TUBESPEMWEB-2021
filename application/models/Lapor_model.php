<?php
class Lapor_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function tampil_data($id = FALSE)
    {
        if ($id == FALSE) {
            $query = $this->db->get('lapor');
            return $query->result_array();
        }
        $query = $this->db->get_where('lapor', array('id' => $id));
        return $query->row_array();
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function uploadLaporan($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function search_model($id){
		return $this->db->get_where('lapor', array('id'=>$id))->row_array();
	}
}
