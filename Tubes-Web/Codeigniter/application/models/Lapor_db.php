<?php 

class Lapor_db extends CI_model{

    public function getLaporan()
    {
        return $this->db->get('lapor')->result_array();
    }

    /*public function tambahdata()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal=date("Y-m-d H:i:s");
    } */
}