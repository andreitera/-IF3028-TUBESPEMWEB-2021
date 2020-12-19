<?php

class Laporan extends CI_Model {

    public function get() {
        $query = $this->db->select('*')->from('laporan')->order_by('id', 'desc')->get();

        return $query->result_array();
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