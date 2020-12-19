<?php

namespace App\Models;

use CodeIgniter\Model;

class lapor_Model extends Model
{
    public $db;
    public $builder;
    protected $table      = 'laporan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['laporan', 'aspek', 'lampiran'];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }
    public function inputData($data)
    {
        $this->builder = $this->db->table($this->table);
        return $this->builder->insert($data);
    }
    public function getdetail($id)
    {
        return $this->getWhere(['id' => $id]);
    }
    public function hapus($id)
    {
        return $this->delete($id);
        // getWhere(['id' => $id]);
    }
    public function updatelapor($data, $id)
    {
        $this->builder = $this->db->table($this->table);
        return $this->builder->where('id', $id)->update($data);
    }
    function semua()
    {
        return $this->findAll();
    }
    public function cari($data)
    {
        return $this->like('laporan', $data, 'both', NULL, TRUE)
            ->findAll();
        // $this->builder = $this->db->table($this->table);
        // return $this->builder->select('*')->from('table')->where("column LIKE '%$data%'")->get()->getResultArray();
    }
}
