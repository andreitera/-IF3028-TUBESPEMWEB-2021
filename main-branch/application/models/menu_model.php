<?php

class menu_model extends CI_Model
{
    public function laporan()
    {
        return $this->db->get('laporan')->result_array();
    }

    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('artikel');
    }
}
