<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{

    public function index()
    {
        $reports = Report::orderby('created_at', 'DESC')->get();
        return view('index', compact('reports'));
    }

    public function create()
    {
        return view('/reports/create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $reports = Report::where('judul', 'LIKE', '%' . $search . '%')->orwhere('isi', 'LIKE', '%' . $search . '%')->orderby('created_at', 'DESC')->paginate(5);
        return view('index', compact('search', 'reports'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'aspect' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);

        $file = $request->file('file'); //save uploaded file into $file
        $fileName = time() . "-" . $file->getClientOriginalName(); //save file name as $fileName
        $uploadDestination = 'attachment'; //destination folder for file uploaded
        $file->move($uploadDestination, $fileName);

        Report::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'aspect' => $request->aspect,
            'file' => $fileName
        ]);
        return redirect('/')->with('status', 'Laporan Berhasil Ditambahkan!');
    }

    public function show(Report $posts)
    {
        return view('reports/show', compact('posts'));
    }


    public function edit(Report $posts)
    {
        return view('reports/edit', compact('posts'));
    }

    public function update(Request $request, Report $posts)
    {
        $request->validate([
            'file' => 'file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);

        $file = $request->file('file'); //save uploaded file into $file
        $fileName = time() . "-" . $file->getClientOriginalName(); //save file name as $fileName
        $uploadDestination = "attachment"; //destination folder for file uploaded
        $file->move($uploadDestination, $fileName);

        Report::where('id', $posts->id)
            ->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'aspect' => $request->aspect,
                'file' => $fileName
            ]);
        return redirect('/')->with('status', 'Laporan Berhasil Diupdate!');
    }

    public function destroy(Report $posts)
    {
        Report::destroy($posts->id);
        return redirect('/')->with('status', 'Laporan Berhasi Dihapus!');
    }
}
