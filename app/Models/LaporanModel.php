<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $useTimestamps = true;
    protected $allowedFields = ['isi_laporan', 'aspek', 'lampiran'];

    public function getLaporan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
