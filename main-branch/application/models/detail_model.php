
<?php

class detail_model extends CI_Model
{
    public function laporan()
    {
        return $this->db->get('laporan')->result_array();
    }

    public function detail_laporan($id)
    {
        return $this->db->get_where('laporan', ['id' => $id])->row_array();
    }

    public function delete_data($hapus, $table)
    {
        $this->db->where($hapus);
        $this->db->delete($table);
    }
}

    /*a href="<?= base_url('detail/hapus_data/') . $laporan['id'] ?>"*/