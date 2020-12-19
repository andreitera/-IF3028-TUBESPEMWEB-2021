<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporModel extends Model
{
    protected $table = 'lapor';

    public function getLapor($id = false)
    {
        if ($id === false) {
            return $this->table('lapor')
                ->orderBy('create_at', 'DESC')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('lapor')
                ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }
    public function tambahLapor($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function update_lapor($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_lapor($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }


    public function search($keyword)
    {
        $query = $this->db->table($this->table)->orLike($keyword);
        return $query->getResult;
    }
}
