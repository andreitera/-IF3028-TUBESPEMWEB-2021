<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'data_laporan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'laporan', 'aspek_pelapor', 'lampiran', 'created_date', 'created_update'
    ];
    protected  $returnType = 'App\Entities\Laporan';
    protected $useTimestamps = false;



    public function queryData()
    {
        return $this->table($this->table)->findAll();
    }

    public function updateData($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteData($id)
    {
        return $this->table($this->table)->delete($id);
    }
}
