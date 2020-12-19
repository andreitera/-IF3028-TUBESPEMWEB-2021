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

Route::get('/','demo@home') ;
Route::get('/input' , 'demo@input') ;
Route::post('/prosesdata' , 'demo@proses') ;
Route::get('/detail/{id}' , 'demo@detail') ;
Route::get('/update' , 'demo@update');
Route::get('/delete/{id}' , 'demo@hapus');
