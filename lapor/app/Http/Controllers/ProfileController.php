<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lapor;

class ProfileController extends Controller
{
    public function showProfile(){
        $listLapor = Lapor::orderBy('created_at', desc)->get();
        return view('Lapor.page.profile')->with([
            'listLapor' => $listLapor
        ]);
    }
}
