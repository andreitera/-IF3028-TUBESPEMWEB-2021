
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

    public function cari_kata()
    {
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("SELECT * from laporan where isi like '%$cari%'");
        return $data->result_array();
    }
}

    /*a href="<?= base_url('detail/hapus_data/') . $laporan['id'] ?>"*/