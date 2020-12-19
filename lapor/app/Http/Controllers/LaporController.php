<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporController extends Controller
{
    
    public function index()
    {
        return view('lapor.page.landing');
    }

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

    public function viewSearch()
    {
        return view('Lapor.page.search');
    }

}
