<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class LaporanController extends Controller
{
    function key(string $hex)
    {
        $sum = 0;
        for ($i=0; $i < strlen($hex); $i++) {
            $sum += ($i+1)*hexdec($hex[$i]);
        }
        return dechex(15-($sum%16));
    }
    function check(string $token)
    {
        return $token[strlen($token)-1] == $this->key(substr($token, 0, strlen($token)-1));
    }
    function gen_token()
    {
        $data = bin2hex(random_bytes(4));
        $key = $this->key($data);
        return $data.$key;
    }
    function rule()
    {
        return [
            "contents" => ['required', 'max:1000', 'regex:/[a-zA-Z ]+/'],
            "file" => ['nullable', 'max:5120', 'image'],
            "aspect" => ['required', Rule::in(['Dosen', 'Staff', 'Mahasiswa', 'Infrastruktur', 'Pengajaran'])]
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laporan::orderByDesc('created_at')->get();
        return view('home', ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->all();
        if ($request->hasFile('file') and $request->file('file')
            ->isValid())
        {
            $path = $request->file('file')->store('image');
            $req['file'] = $path;
        }
        Laporan::create($req);
        return response()->json(["token" => "sukses"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $laporan = $request->id;
        if(Laporan::where('id', $laporan)->exists()){
            $data = Laporan::find($laporan);
            return response()->json($data->makeHidden('token'));
        }
        else{
            return response()->json([], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $data = Laporan::find($id);
        return view("editForm", ["data" => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $req = $request->all();
        if ($request->hasFile('file') and $request->file('file')
            ->isValid())
        {
            $path = $request->file('file')->store('image');
            $req['file'] = $path;
        }
        $laporan = Laporan::find($request->id);
        $laporan->update($req);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Laporan::find($id)->delete();
    }

    public function cari(Request $request)
    {
        $keyword = $request->keyword;
        $tes = Laporan::where('contents', 'like', '%'.$keyword.'%')->get();
        return view("cari", ["data" => $tes]);
    }
    public function detail(Request $request, $id)
    {
        $data = Laporan::find($id);
        return view("detail", ["data" => $data]);
    }
}
