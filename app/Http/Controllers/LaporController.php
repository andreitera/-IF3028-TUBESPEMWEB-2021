<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailLapor;
use Illuminate\Support\Facades\Storage;

class LaporController extends Controller
{
    /*
        Landing Page
    */
    public function home()
    {
        $data = DB::table('laporan')->orderByDesc('id')->limit(3)->get();
        return view('lapor/index', ['lapor' => $data]);
    }

    /*
        List Laporan
    */
    public function index()
    {
        $data = DB::table('laporan')->orderByDesc('id')->simplePaginate(5);
        return view('lapor/listlaporan', ['lapor' => $data]);
    }

    /*
        View Create Laporan
    */
    public function create()
    {
        return view('lapor/buatlaporan');
    }

    /*
        Post Create Laporan 
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['nullable', 'max:255'],
            'title' => ['required'],
            'content' => ['required'],
            'aspect' => ['required'],
            'filelapor' => ['nullable', 'mimetypes:image/jpeg,image/png,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation', 'max:10240']
        ]);
        $name = $request->input('name');
        $title = $request->input('title');
        $content = $request->input('content');
        $word = str_word_count($content);
        $aspect = $request->input('aspect');
        $uniqid = uniqid();
        $uniqfile = uniqid();
        if ($name == '') {
            $name = 'Anonim';
        }
        if ($request->hasFile('filelapor')) {
            $filelapor = $request->file('filelapor');
            $path = "public/lapor";
            $store = $filelapor->storeAs($path, $uniqfile . '.' . $filelapor->extension());
            $linkfile = $request->root() . '/storage/lapor/' . $uniqfile . '.' . $filelapor->extension();
            if ($store == '') {
                $linkfile = "Tidak ada lampiran";
            } else {
                $filelapor = Storage::url($store);
                $filelapor = $request->root() . $filelapor;
            }
        } else {
            $linkfile = "Tidak ada lampiran";
        }
        try {
            DB::table('laporan')->insertGetId([
                'from' => $name,
                'title' => $title,
                'content' => $content,
                'aspect' => $aspect,
                'unique_id' => $uniqid,
                'file' => $linkfile,
            ]);
        } catch (Exception $th) {
            return redirect()->route('lapor')->with('msg', 'Laporan gagal dibuat');
        }
        return view('lapor/success', ['uniqid' => $uniqid]);
    }


    /*
        Show Laporan
    */
    public function show($id)
    {
        $data = DB::table('laporan')->where('id', $id)->first();
        if ($data != NULL) {
            return view('lapor/lihatlaporan', ['lapor' => $data]);
        } else {
            return redirect()->route('home')->with('msg', 'Laporan yang anda cari tidak ditemukan');
        }
    }


    /*
        Post Edit Laporan 
    */
    public function update(Request $request, $unique_id)
    {
        $request->validate([
            'name' => ['nullable', 'max:255'],
            'title' => ['required'],
            'content' => ['required'],
            'aspect' => ['required'],
            'filelapor' => ['nullable', 'mimetypes:image/jpeg,image/png,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation', 'max:10240']
        ]);
        $name = $request->input('name');
        $title = $request->input('title');
        $content = $request->input('content');
        $word = str_word_count($content);
        $aspect = $request->input('aspect');
        $uniqfile = uniqid();
        if ($name == '') {
            $name = 'Anonim';
        }
        if ($request->hasFile('filelapor')) {
            $filelapor = $request->file('filelapor');
            $path = "public/lapor";
            $store = $filelapor->storeAs($path, $uniqfile . '.' . $filelapor->extension());
            $linkfile = $request->root() . '/storage/lapor/' . $uniqfile . '.' . $filelapor->extension();
            if ($store == '') {
                $linkfile = "Tidak ada lampiran";
            } else {
                $filelapor = Storage::url($store);
                $filelapor = $request->root() . $filelapor;
            }
        } else {
            $linkfile = "Tidak ada lampiran";
        }
        $time = Carbon::now();
        $time = $time->setTimezone('Asia/Jakarta');
        try {
            DB::table('laporan')->where('unique_id', '=', $unique_id)->update([
                'from' => $name,
                'title' => $title,
                'content' => $content,
                'aspect' => $aspect,
                'file' => $linkfile,
                'created_at' => $time,
            ]);
        } catch (Exception $th) {
            return redirect()->route('lapor')->with('msg', 'Laporan gagal diedit');
        }
        return redirect()->route('lapor');
    }

    /*
        Post Sending to Email Laporan 
    */
    public function sendEmail(Request $request)
    {
        $email = $request->get('email');
        $uniqid = $request->get('uniqid');
        $details = [
            'title' => 'Mail from Lapor!',
            'uniqid' => 'Uniqid digunakan untuk mensunting atau mengapus laporan anda',
            'id' => $uniqid
        ];
        if ($email != NULL) {
            Mail::to($email)->send(new MailLapor($details));
            return redirect()->route('lapor')->with('msg', 'Silahkan cek email');
        } else {
            return redirect()->route('home');
        }
    }

    /*
        Post Get Unique Id Laporan for edit and delete laporan
    */
    public function getUniqueId(Request $req)
    {
        $uniqid = $req->input('uniqid');
        $id = $req->input('id');
        $cek = DB::table('laporan')->where('unique_id', 'like', $uniqid, 'and', 'id', '=', $id)->first();
        if ($cek != NULL) {
            switch ($req->input('action')) {
                case 'edit':
                    return view('lapor/editlaporan', ['lapor' => $cek]);
                    break;
                case 'delete';
                    try {
                        DB::transaction(function () use ($uniqid) {
                            DB::table('laporan')->where('unique_id', 'like', $uniqid)->delete();
                        }, 5);
                    } catch (Exception $th) {
                        return redirect()->route('lapor')->with('msg', 'Laporan gagal dihapus');
                    }
                    return redirect()->route('lapor')->with('msg', 'Laporan berhasil dihapus');
                    break;
            }
        } else {
            return redirect()->route('laporShow', $id)->with('msg', 'Salah memasukkan Unique Id!');
        }
    }

    /**
     * Search Laporan
     */
    public function search(Request $request)
    {
        $judul = $request->input('judul');
        $judul = '%' . $judul . '%';
        $data = DB::table('laporan')->where('judul', 'like', $judul)->orderByDesc('id')->simplePaginate(5);
        return view('lapor/listlaporan', ['lapor' => $data]);
    }
}
