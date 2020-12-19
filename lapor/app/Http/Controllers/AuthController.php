<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('Lapor.page.register');
    }

    public function login()
    {
        return view('Lapor.page.login');
    }
}
