<?php

namespace App\Controllers;

use App\Models\laporModel;
use CodeIgniter\Model;

class Pages extends BaseController
{

    public function __construct()
    {
        $this->laporModel = new laporModel();
    }

    public function home()
    {
        $data = [
            'judul' => 'LAPOR! - Layanan Aspirasi Masyarakat',
            'lapor' => $this->laporModel->getLapor()
        ];
        return \view('pages/home', $data);
    }

    //--------------------------------------------------------------------

}
