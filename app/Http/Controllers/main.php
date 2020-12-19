<?php

namespace App\Http\Controllers;

use File ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class main extends Controller
{

    public function utama()
    {
        $data = DB::table('lapor')->get();
        return view('utama', ['data' => $data]);

    }

    public function buat()
    {
        return view('buat');
    }

    public function detail()
    {
        return view('detail');
    }


    public function datadetail($id){
        $data = DB::table('lapor')->where("id" , $id)->get();

        return view('detail', ['data' => $data]) ;
    }

    public function hapus($id){
        $data = DB::table('lapor')->where('id' , $id)->first();

        File::delete('file_data/' . $data->file );

        DB::table('lapor')->where('id' , $id)->delete() ;
       return redirect('/utama') ;
    }

    public function update($id){
        $data = DB::table('lapor')->where('id' , $id)->first();

        return view('update' , ['data' => $data]) ;
    }

    public function updateproses(Request $request , $id){
        $data = DB::table('lapor')->where('id' , $id)->first();

        File::delete('file_data/' . $data->file) ;

        $komentar = $request->komentar ;
        $aspek  = $request->aspek ;
        $file = $request->file('file');
        $waktu = date("d-m-Y H:i");

        $folder = "file_data" ;
        $namafile = $file->getClientOriginalName();
        $file->move($folder , $namafile);

        DB::table('lapor')
            ->where('id' , $id )
            ->update(
                ['komentar' => $komentar , 'aspek' => $aspek , 'file' => $namafile ,'waktu' => $waktu ]
            );

        return redirect('/detail/'. $id) ;
    }

    public function data($data)
    {

        if ($data != "") {
            $Data = DB::table('lapor')
                ->where('komentar', 'like', "%" . $data . "%")
                ->orWhere('aspek', 'like', "%" . $data . "%")
                ->get();

            return response()->json($Data);
        }else if($data === "data"){
            $Data = DB::table('lapor')->get();

            return response()->json($Data) ;
        }
    }
    

}
