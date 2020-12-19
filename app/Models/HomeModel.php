<?php namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = 'laporan';
    protected $useTimeStamps = true;
    protected $allowedFields = ['isi', 'lampiran', 'aspek'];
    
    public function get($id = NULL){
        if (!$id) {
            return $this->orderBy('created_at', 'DESC')->findAll();
        }

        return $this->find($id);
    }
}
?>