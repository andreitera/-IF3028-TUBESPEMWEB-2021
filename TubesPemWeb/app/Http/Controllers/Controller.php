<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        if ($request->session()->has('login')) {
            return redirect('/buatlaporan');
        } else {
            return view('home');
        }
    }
    public function registerUser(Request $request)
    { //Package mengambil inputan user dari form sekaligus mengecek validasi

        $request->validate([
            'nama' => 'required',
            'username' => 'min:8|required',
            'email' => 'required|email|email',
            'nohp' => 'min:8|required|numeric',
            'psw' => 'min:8|required_with:psw_repeat|same:psw_repeat',
            'psw_repeat' => 'required',

        ]);

        $user = DB::table('user')->insert(
            [
                'nama' => $request->nama,
                'username' => $request->username,
                'email' => $request->email,
                'no_telp' => $request->nohp,
                'password' => $request->psw
            ]
        );
        return redirect('/');
    }

    public function loginUser(Request $request)
    {

        $request->validate([
            'uname' => 'min:8|required',
            'psw' => 'min:8|required',
        ]);

        $user = DB::table('user')->where('username', $request->uname)->where('password', $request->psw)->first();

        if ($user) {
            $request->session()->put('login', 'Diki Alfarabi Hadi');
            return redirect('/buatlaporan');
        } else {
            return redirect('/register');
        }
    }
    //test branch buat pull
    public function buatLaporan(Request $request)
    {

        if ($request->session()->has('login')) {
            return view('buatLaporan');
        } else {
            echo 'Login Dulu Cess';
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('login');
        return redirect('/');
    }

    public function simpanlaporan(Request $request)
    {

        $request->validate([
            'judul' => 'required',
            'isi' => 'min:100|required',
            'tipe' => 'required',
            'tanggal' => 'required|date',
            'lampiran' => 'required|file|mimes:doc,docx,xls,xlsx,ppt,pptx,pdf|max:2048',
        ]);

        $file = $request->file('lampiran');
        $dir_upload = "assets/upload";
        $fileName = time() . '.' . $request->file('lampiran')->extension();

        if ($file->move($dir_upload, $fileName)) {
            $laporan = DB::table('laporan')->insert(
                [
                    'tipe_laporan' => $request->tipe,
                    'judul_laporan' => $request->judul,
                    'isi_laporan' => $request->isi,
                    'tgl_kejadian' => $request->tanggal,
                    'lampiran' => $fileName,
                    'anonimitas' => $request->anonim,
                    'id_user' => 3
                ]
            );
            if ($laporan) {
                return redirect('/tampilkanlaporan');
            }
        }
    }

    public function tampilkanlaporan(Request $request)
    {
        echo "Berhasil upload";
    }
}
