<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Aspek;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = Laporan::latest()->paginate(3);
        return view('laporan.index',compact('laporan'))->with('i',(request()->input('page', 1) -1 ) * 3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aspek = Aspek::all();
        return view('laporan.create',compact('aspek'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required',
            'id_aspek' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png,gif|max:20480'
        ]);
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('uploads'), $fileName);
        Laporan::create([
            'isi' => $request->isi,
            'id_aspek' => $request->id_aspek,
            'file' => $fileName
        ]);
        return redirect()->route('laporan.index')->with('success','Laporan Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        $laporanDetail = \App\Models\Laporan::select('*','laporan.created_at as tanggal')->join('aspek','aspek.id_aspek','=','laporan.id_aspek')
        ->where(['id_laporan' => $laporan->id_laporan])->first();
        return view('laporan.show',compact('laporanDetail','laporan'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
 
        return redirect()->route('laporan.index')
                        ->with('success','Laporan Berhasil Dihapus');
    }

    public function search(Request $request){
        $query = $request->input('query');
        $laporan = Laporan::where('isi','like',"%$query%")->paginate(3);
        return view('laporan.search',compact('laporan'))->with('i',(request()->input('page', 1) -1 ) * 3);
    }
}
