<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

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
            'pengirim' => ['nullable', 'max:255'],
            'judul' => ['required'],
            'laporan' => ['required'],
            'aspek' => [Rule::requiredIf($request->input('aspek') == "1")],
            'lampiran' => ['nullable', 'mimetypes:image/jpeg,image/png,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation', 'max:10240']
        ]);
        $pengirim = $request->input('pengirim');
        $judul = $request->input('judul');
        $laporan = $request->input('laporan');
        $aspek = $request->input('aspek');
        $time = Carbon::now();
        $time = $time->setTimezone('Asia/Jakarta');
        $filename = uniqid();
        if ($pengirim == '') {
            $pengirim = "Anonim";
        }
        if ($request->hasFile('lampiran')) {
            $lampiran = $request->file('lampiran');
            $path = "public/file";
            $store = $lampiran->storeAs($path, $filename . '.' . $lampiran->extension());
            $file = $request->root() . '/storage/file/' . $filename . '.' . $lampiran->extension();
            if ($store == '') {
                $file = "Tidak ada lampiran";
            } else {
                $lampiran = Storage::url($store);
                $lampiran = $request->root() . $lampiran;
            }
        } else {
            $file = "Tidak ada lampiran";
        }
        try {
            DB::table('reports')->insertGetId([
                'pengirim' => $pengirim,
                'judul' => $judul,
                'laporan' => $laporan,
                'aspek' => $aspek,
                'lampiran' => $file,
                'created_at' => $time,
            ]);
        } catch (Exception $th) {
            return redirect()->route('buat')->with('msg', "Laporan gagal dibuat");
        }
        return redirect()->route('home')->with('msg', "Berhasil buat Laporan");
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
            'pengirim' => ['nullable', 'max:255'],
            'judul' => ['required'],
            'laporan' => ['required'],
            'aspek' => [Rule::requiredIf($request->input('aspek') == "1")],
            'lampiran' => ['nullable', 'mimetypes:image/jpeg,image/png,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation', 'max:10240']
        ]);
        $pengirim = $request->input('pengirim');
        $judul = $request->input('judul');
        $laporan = $request->input('laporan');
        $aspek = $request->input('aspek');
        $time = Carbon::now();
        $time = $time->setTimezone('Asia/Jakarta');
        $filename = uniqid();
        if ($pengirim == '') {
            $pengirim = "Anonim";
        }
        if ($request->hasFile('lampiran')) {
            $lampiran = $request->file('lampiran');
            $path = "public/file";
            $store = $lampiran->storeAs($path, $filename . '.' . $lampiran->extension());
            $file = $request->root() . '/storage/file/' . $filename . '.' . $lampiran->extension();
            if ($store == '') {
                $file = "Tidak ada lampiran";
            } else {
                $lampiran = Storage::url($store);
                $lampiran = $request->root() . $lampiran;
            }
        } else {
            $file = "Tidak ada lampiran";
        }
        try {
            DB::table('reports')->where('id', '=', $id)->update([
                'pengirim' => $pengirim,
                'judul' => $judul,
                'laporan' => $laporan,
                'aspek' => $aspek,
                'lampiran' => $file,
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
        if (DB::table('reports')->where('id', '=', $id)->exists()) {
            try {
                DB::transaction(function () use ($id) {
                    DB::table('reports')->where('id', '=', $id)->delete();
                }, 5);
            } catch (Exception $th) {
                return redirect()->route('show', $id)->with('msg', 'Laporan gagal dihapus');
            }
            return redirect()->route('home')->with('msg', 'Laporan berhasil dihapus');
        } else {
            return redirect()->route('home')->with('msg', 'Laporan gagal dihapus');
        }
    }
}
