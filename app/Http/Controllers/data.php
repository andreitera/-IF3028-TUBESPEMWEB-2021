<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class data extends Controller
{
    //
    public function process(Request $request){
        date_default_timezone_set("Asia/Jakarta");
        $komentar = $request->komentar ;
        $aspek  = $request->aspek ;
        $file = $request->file('file');
        $waktu = date("d-m-Y H:i");

        $folder = "file_data" ;
        $namafile = $file->getClientOriginalName();
        $file->move($folder , $namafile);

    DB::table('lapor')->insert(['judul'=> 'Laporan/Komentar' , 'komentar' => $komentar , 'aspek' => $aspek , 'file' => $namafile,
        'waktu' => $waktu]);

    return redirect('utama');
    }

}
