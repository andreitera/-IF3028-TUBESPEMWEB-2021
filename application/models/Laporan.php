<?php

class Laporan extends CI_Model {

    public function get($id) {
        if($id === NULL) {
            $query = $this->db->select('*')->from('laporan')->get();
        } else {
            //load specific laporan by id
            $query = $this->db->select('*')->from('laporan')->where('id', $id)->get();
        }

        return $query->result();
    }

    public function add($laporan) {
        return $this->db->insert('laporan', $laporan);
    }

    public function update($id, $user_token, $laporan) {
        $where = array(
            'id' => $id,
            'user_token' => $user_token
        );

        return $this->db->where($where)->update('laporan', $laporan);
    }

    public function delete($id, $user_token) {
        $where = array(
            'id' => $id,
            'user_token' => $user_token
        );

        return $this->db->where($where)->delete('laporan');
    }

}

?>