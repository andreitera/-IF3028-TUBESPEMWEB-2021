<?php 

class Model_Laporan extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    
    public function get_laporan($id=FALSE){
        if($id===FALSE){
            $query = $this->db->get('laporan');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('laporan', array('id' =>$id));
        return $query -> row_array();
    }
    
    public function set_laporan($data){
        return $this->db->insert('laporan', $data);
    }

    public function cari_data($keyword){
        $this->db->like('isi', $keyword);
        $query = $this->db->get('laporan');
        return $query->result_array();
    }

    public function update_data($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('laporan', $data);
	}

    public function hapus_data($id){
        $this->db->where('id', $id);
        return $this->db->delete('laporan');
    }
}
?>