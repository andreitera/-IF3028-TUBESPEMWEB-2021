<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporController extends Controller
{
    
    public function listView()
    {
        return view('Lapor.page.listlapor');
    }

    public function viewLapor()
    {
        return view('Lapor.page.viewLapor');
    }

    public function viewComment()
    {
        return view('Lapor.page.viewComment');
    }

    public function viewSearch()
    {
        return view('Lapor.page.search');
    }

    public function queryLapor($id)
    {
        return DB::table('lapor')
        ->select('laporan')
        ->where('id', '=', $id)
        ->get();
    }

    public function queryComment($id)
    {
        return DB::table('komentar')
        ->select('komentar.komentar')
        ->join('users', 'users.user_id', '=', 'komentar.user_id')
        ->join('lapor', 'lapor.lapor_id', '=', 'komentar.lapor_id')
        ->where('komentar.id', '=', $id)
        ->get();
    }

    public function querySearch($title)
    {
        return DB::table('lapor')
        ->select('laporan')
        ->where('title', 'REGEXP', $id)
        ->get();
    }

}
