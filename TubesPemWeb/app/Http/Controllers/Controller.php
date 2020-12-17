<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(Request $request){
        if($request->session()->has('login')){
            return redirect('/buatlaporan');
		}else{
			return view('home');
		}
    }
    public function registerUser(Request $request){ //Package mengambil inputan user dari form sekaligus mengecek validasi
        
        $request->validate([
            'nama' => 'required',
            'username' => 'min:8|required',
            'email'=> 'required|email|email',
            'nohp' => 'min:8|required|numeric',
            'psw' => 'min:8|required_with:psw_repeat|same:psw_repeat',
            'psw_repeat' => 'required',
           
        ]);
        
        $user = DB::table('user')->insert(
            ['nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'no_telp' => $request->nohp,
            'password' => $request->psw]
        );
        return redirect('/');
    }

    public function loginUser(Request $request){

    	$request->validate([
    		'uname'=> 'min:8|required',
    		'psw' => 'min:8|required',
    	]);

    	$user = DB::table('user') -> where ('username',$request->uname)->where('password',$request->psw)->first();
    	
    	if ($user) {
    		return redirect('/halamanlpr');
    	}else{
    		return redirect('/register');
    	}


    }
  //test branch buat pull

}

