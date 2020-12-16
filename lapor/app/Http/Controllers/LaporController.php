<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporController extends Controller
{
    
    public function listView()
    {
        return view('Lapor.page.listlapor');
    }

}
