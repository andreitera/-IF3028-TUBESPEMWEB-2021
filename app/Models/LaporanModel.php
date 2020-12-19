<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $useTimestamps = true;
    protected $allowedFields = ['isi_laporan', 'aspek', 'lampiran'];
}
