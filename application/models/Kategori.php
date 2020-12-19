<?php

class Laporan extends CI_Model {

    public function get($id) {
        if($id === NULL) {
            $query = $this->db->select('*')->from('kategori')->get();
        } else {
            //load specific laporan by id
            $query = $this->db->select('*')->from('kategori')->where('id', $id)->get();
        }

        return $query->result();
    }

}

?>