<?php

use Illuminate\Support\Facades\Route;

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
Route::post('edit', "LaporanController@edit");
Route::post('update', "LaporanController@update");
Route::post('create', "LaporanController@create");
Route::post('index', "LaporanController@index");
Route::post('show', "LaporanController@show");
Route::post('delete', "LaporanController@destroy");
