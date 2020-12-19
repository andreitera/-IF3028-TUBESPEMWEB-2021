<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{

    public function home() {
        $data = DB::table('laporan')->orderByDesc('id')->get();
        return view('home', ['data' => $data]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('laporan')->get();
        return view('daftarlaporan', ['lapor' => $data]);
    }


    public function cari(Request $request) {
        $judul = $request->input('cari');
        $judul = '%' . $judul . '%';
        $data = DB::table('laporan')->where('judul', 'like', $judul)->get();
        return view('daftarlaporan', ['lapor' => $data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formlaporan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengirim = $request->input('pengirim');
        $judul = $request->input('judul');
        $isilaporan = $request->input('isilaporan');
        $aspect = $request->input('aspect');
        $pengirim = $request->input('pengirim');
        $file = $request->file('file');
        $path = "public/file";
        $filestore = $file->storeAs($path, $pengirim . '.' .$file->extension());
        $link = $request->root() . '/storage/file/' . $pengirim . '.' . $file->extension();
        $file = Storage::url($filestore);
        $file = $request->root() . $file;
        try {
            DB::table('laporan')->insertGetId([
                'pengirim' => $pengirim,
                'judul' => $judul,
                'isilaporan' => $isilaporan,
                'aspect' => $aspect,
                'file' => $link
            ]);
        } catch (Exception $th) {
            return redirect()->route('daftarlaporan')->with('pesan', 'gagal membuat laporan');
        }
        return redirect()->route('daftarlaporan')->with('pesan', 'berhasil membuat membuat laporan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('laporan')->where('id', $id)->first();
        return view('lihatlaporan', ['lengkap' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('laporan')->where('id', $id)->first();
        return view('ubahlaporan', ['edit' => $data]);
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
        $pengirim = $request->input('pengirim');
        $judul = $request->input('judul');
        $isilaporan = $request->input('isilaporan');
        $aspect = $request->input('aspect');
        $pengirim = $request->input('pengirim');
        $file = $request->file('file');
        $path = "public/file";
        $filestore = $file->storeAs($path, $pengirim . '.' .$file->extension());
        $link = $request->root() . '/storage/file/' . $pengirim . '.' . $file->extension();
        $file = Storage::url($filestore);
        $file = $request->root() . $file;
        try {
            DB::table('laporan')->where('id', $id)->update([
                'pengirim' => $pengirim,
                'judul' => $judul,
                'isilaporan' => $isilaporan,
                'aspect' => $aspect,
                'file' => $link
            ]);
        } catch (Exception $th) {
            return redirect()->route('lihatlaporan', $id)->with('pesan', 'laporan gagal diedit');
        }
        return redirect()->route('lihatlaporan', $id)->with('pesan', 'laporan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::table('laporan')->where('id', $id)->delete();
        } catch (Exception $th) {
            return redirect()->route('daftarlaporan')->with('pesan', 'laporan gagal dihapus');
        }
        return redirect()->route('daftarlaporan')->with('pesan', 'laporan berhasil dihapus');
    }
}
