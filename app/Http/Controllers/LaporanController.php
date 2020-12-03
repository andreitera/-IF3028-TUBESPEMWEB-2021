<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            "from" => ['nullable', 'max:20', 'regex:/[a-zA-Z ]+/'],
            "title" => ['required', 'max:50', 'regex:/[a-zA-Z ]+/'],
            "contents" => ['required', 'max:1000', 'regex:/[a-zA-Z ]+/']
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laporan::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rule());
        $req = $request->all();
        $req['token'] = $this->gen_token();
        Laporan::create($req);
        return response()->json(["token" => $req['token']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $laporan = $request->laporan;
        if(Laporan::where('id', $laporan)->exist()){
            $data = Laporan::find($laporan);
            return response()->json($data);
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
        $token = $request->token;
        if($this->check($token)){
            $data = Laporan::where('token', $token)->first();
            $now = Carbon::now('Asia/Jakarta');
            if($now->diffInHours($data->created_at) < 24){
                return response()->json($data);
            }
            else{
                return response()->json(["status" => "expired"]);
            }
        }
        else{
            return response()->json([], 404);
        }
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
        $token = $request->token;
        if ($this->check($token)) {
            $request->validate($this->rule());
            $laporan = Laporan::where('token', $token)->first();
            $now = Carbon::now('Asia/Jakarta');
            if($now->diffInHours($laporan->created_at) < 24){
                $laporan->update($request);
                return response()->json(["status" => "sukses"]);
            }
            else{
                return response()->json(["status" => "expired"]);
            }
        }
        else{
            return response()->json([], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $token = $request->token;
        if($this->check($token)){
            Laporan::where('token', $token)->delete();
        }
        else{
            return response()->json([], 404);
        }
    }
}
