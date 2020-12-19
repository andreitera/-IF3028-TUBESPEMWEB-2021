<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


use App\Models\Users;


class AuthController extends Controller
{
    public function register()
    {
        return view('Lapor.page.register');
    }

    public function registerPost(request $input)
    {
        $this->validate($input, [
            'username'      => 'required|alpha_dash|unique:users,username|min:6|max:80',
            'email'         => 'required|string|email|unique:users,email|max:55',
            'password'      => 'required|string|min:6|required_with:confirmpass|same:confirmpass',
            'confirmpass'      => 'required',
        ]);

        $data       = new Users;
        $data->name = $input->namalengkap;
        $data->role_id = 1002;
        $data->username = $input->username;
        $data->email = $input->email;
        $data->no_tlp   = $input->notelepon;
        $data->password = bcrypt($input->password);

        if($data->save()){
            return redirect()->route('login.user')->with('success', 'Berhasil Register - Silakan Melakukan Login');
        } return redirect()->back()->with('danger', 'Terjadi Kesalahan saat Register - Silakan Melakukan Login');
            
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
