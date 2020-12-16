<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formlapor()
    {
        return view('formlapor');
    }

    public function index()
    {
        $data = DB::table('reports')->get();
        return view('semualaporan', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'laporan' => ['required'],
            'aspek' => [Rule::requiredIf($request->input('aspek') == "1")],
            'lampiran' => ['max:5120,', 'mimetypes:image/jpeg, image/png']
        ]);
        $laporan = $request->input('laporan');
        $aspek = $request->input('aspek');
        $time = Carbon::now();
        $time = $time->setTimezone('Asia/Jakarta');
        try {
            DB::table('reports')->insertGetId([
                'laporan' => $laporan,
                'aspek' => $aspek,
                'lampiran' => 'Tidak ada lampiran',
                'created_at' => $time,
            ]);
        } catch (Exception $th) {
            return redirect()->route('buat')->with('msg', "Laporan gagal dibuat");
            // return redirect()->route('buat');
        }
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('reports')->where('id', '=', $id)->first();
        return view('editlaporan', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'laporan' => ['required'],
            'aspek' => [Rule::requiredIf($request->input('aspek') == "1")],
            'lampiran' => ['max:5120,', 'mimetypes:image/jpeg, image/png']
        ]);
        $laporan = $request->input('laporan');
        $aspek = $request->input('aspek');
        $time = Carbon::now();
        $time = $time->setTimezone('Asia/Jakarta');
        try {
            DB::table('reports')->where('id', '=', $id)->update([
                'laporan' => $laporan,
                'aspek' => $aspek,
                'lampiran' => 'lampiran',
                'created_at' => $time,
            ]);
        } catch (Exception $th) {
            return redirect()->route('home')->with('msg', 'Laporan gagal diedit');
        }
        return redirect()->route('home')->with('msg', 'Laporan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('reports')->where('id', '=', $id)->exists()) {
            try {
                DB::transaction(function () use ($id) {
                    DB::table('reports')->where('id', '=', $id)->delete();
                }, 5);
            } catch (Exception $th) {
                return redirect()->route('show', $id)->with('msg', 'Laporan gagal dihapus');
            }
            return redirect()->route('home')->with('msg', 'Laporan berhasil dihapus');
        }
        else {
            return redirect()->route('home')->with('msg', 'Laporan gagal dihapus');
        }
    }
}
