<?php

namespace App\Models;

use CodeIgniter\Model;

class laporModel extends Model
{
    protected $table = 'laporan';
    protected $allowedFields = ['nama', 'isi', 'aspek', 'lampiran'];

    protected $useTimestamps = true;

    public function getLapor($id = false)
    {
        if ($id == false) {
            // $this->db->order_by('id', 'DESC');
            // $query = $this->db->get('laporan');
            // return $query->result_array();
            // $this->order_by('id', "DESC");
            return $this->orderBy('id', 'DESC')->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function search($cari)
    {
        $builder = $this->table('lapor')->like('nama', $cari);
        $builder = $this->table('lapor')->orLike('aspek', $cari);
        return $builder;
    }
}
