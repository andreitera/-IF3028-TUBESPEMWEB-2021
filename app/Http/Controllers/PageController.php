<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function utama()
    {
        return view('utama');
    }

    public function buatlaporan()
    {
        return view('buatlaporan');
    }
}
