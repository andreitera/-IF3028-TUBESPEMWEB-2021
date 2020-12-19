<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lapor;

use App\Models\Comment;
use App\Models\SetCities;
use App\Models\SetLibraries;
use App\Models\SetProvinces;

class LaporController extends Controller
{
    
    public function index()
    {
        $listLokasi = SetCities::orderBy('name', 'asc')->get();
        $listInstansi = SetProvinces::orderBy('name', 'asc')->get();
        $listKategori = SetLibraries::where('category_id', '13')->orderBy('name', 'asc')->get();
        return view('lapor.page.landing')->with([
            'listLokasi' => $listLokasi,
            'listInstansi' => $listInstansi,
            'listKategori' => $listKategori
        ]);
    }

    public function listView($user_id)
    {
        $listLapor = Lapor::where('user_id', '$user_id')->orderBy('created_at', 'desc')->get();
        return view('Lapor.page.listLapor')->with([
            'listLapor' => $listLapor
        ]);
    }

    // public function viewLapor()
    // {
    //     return view('Lapor.page.viewLapor');
    // }

    public function viewLapor($id)
    {
        $listLapor = Lapor::where('id', '$id')->get();
        $listComment = Comment::where('lapor_id', '$id')->get();
        return view('Lapor.page.viewLapor')->with([
            'listLapor' => $listLapor,
            'listComment' => $listComment
        ]);
    }

    public function viewSearch($search)
    {
        $listSearch = Lapor::where('title', 'regexp', '%'.  $search . '%' )->get();
        return view('Lapor.page.search')->with([
            'listSearch' => $listSearch
        ]);
    }

}
