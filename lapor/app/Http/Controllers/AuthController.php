<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;


use App\Models\Users;


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

    public function loginPost(request $input)
    {
        $userByEmail    = Users::where('email', $input->username)->first();
        $userByUsername = Users::where('username', $input->username)->first();

        if($userByEmail || $userByUsername) {
            if (Auth::attempt(['email' => $input->username, 'password' => $input->password], true) || Auth::attempt(['username' => $input->username, 'password' => $input->password], true)) {
                return Auth::check();
                return redirect()->route('landing');
            }
            return redirect()->back()->with('danger', 'Maaf, Password yang Anda masukkan salah.');
        }
        return redirect()->back()->with('danger', 'Maaf, email/username yang Anda masukkan belum terdaftar');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing');
    }

}
