<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporController extends Controller
{
    
    public function listView()
    {
        return view('Lapor.page.listlapor');
    }

    public function viewLapor()
    {
        return view('Lapor.page.viewLapor');
    }

    public function viewComment()
    {
        return view('Lapor.page.viewComment');
    }

}
