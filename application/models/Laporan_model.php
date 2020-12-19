<?php 

class Laporan_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }


    public function get_laporan($id= FALSE){
        if($id=== FALSE){
        $query = $this->db->get('laporan');
        return $query->result_array();
        }

        $query = $this->db->get_where('laporan' , array('no' =>$id));
        return $query -> row_array();
    }

    public function input_laporan($table, $data){
        $this->db->insert($table, $data);
    }

    public function hapus_data($delete_row , $table ){
        $this->db->where($delete_row);
        $this->db->delete($table);
    }

    public function search_data($keyword , $table){
        $this->db->like('komentar' , $keyword);
        $query = $this->db->get($table);
        return $query->result_array();
    }
}

?>