<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class demo extends Controller
{
    //
   public function home(){ //fungsihome
       $data = DB::table('laporan')->get() ;
       return view('home',['data' => $data]) ;
   }

   public function input(){


       return view('input' ) ;
   }

   public function proses(Request $request){
       $komentar = $request->input('komentar') ;
       $aspek    = $request->input('aspek') ;
       $file = $request->file('file') ;
       $waktu = date('d-m-Y H:i') ;
       $name = $file->getClientOriginalName() ;

       $file->move('file_baru' , $name) ;

       DB::table('laporan')->insert([ //insert
           'komentar' => $komentar ,
           'aspek' => $aspek ,
           'lampiran' => $name ,
           'waktu' => $waktu
       ]);
   }

   public function detail($id){ //fungsidetaillaporan
       $data = DB::table('laporan')
           ->where('id' , $id)
           ->get() ;

       return view('data' , ['data' => $data]) ;
   }

   public function hapus($id){ //fungsihapuslaporan
       $data = DB::table('laporan')
           ->where('id', $id)
           ->delete() ;

       return view('data' , ['data' => $data]) ;
   }
}
