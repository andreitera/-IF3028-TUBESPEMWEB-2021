<?php

class Kategori extends CI_Model {

    public function get() {
        $query = $this->db->select('*')->from('kategori')->get();

        return $query->result_array();
    }

    public function get_by_id($id) {
        $query = $this->db->select('*')->from('kategori')->where('id', $id)->limit(1)->get();

        return ($query->result() != NULL)? $query->result()[0]->kategori : '';
    }

    

}

?>