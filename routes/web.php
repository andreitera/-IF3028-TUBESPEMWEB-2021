<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data' , function (){

    return response()->json([
        "nama" => "salman"
    ]) ;
});

Route::get('/utama' , 'main@utama');

Route::get('/' , 'main@utama');

Route::get('/buat' , 'main@buat') ;

Route::get('/detail' , 'main@detail') ;

Route::post('/process' , 'data@process') ;

Route::get('/detail/{id}' , 'main@datadetail') ;

Route::get('/delete/{id}' , 'main@hapus');

Route::get('/update/{id}' , 'main@update');

Route::post('/process/update/{id}' , 'main@updateproses');

Route::get('/data/{data}' , 'main@data') ;
