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

Route::get('/',                 'LaporanController@home')->name('home');

Route::get('/daftarlaporan',            'LaporanController@index')->name('daftarlaporan');
Route::get('/buatlaporan',            'LaporanController@create')->name('buatlaporan');
Route::post('/buatlaporan',            'LaporanController@store')->name('lapor');
Route::post('/editlaporan/{id}',            'LaporanController@edit')->name('edit');
Route::post('/editlaporan/{id}/edit',            'LaporanController@update')->name('editlaporan');
Route::post('/hapuslaporan/{id}',            'LaporanController@destroy')->name('hapus');
Route::get('/laporan/{id}',             'LaporanController@show')->name('lihatlaporan');
Route::post('/carilaporan',             'LaporanController@cari')->name('cari');
