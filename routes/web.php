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


Route::get('/',                                     'UtamaController@utama')->name('home');

<<<<<<< HEAD
Route::get('/formlapor',                            'ReportController@formlapor')->name('buat');
Route::post('/formlapor',                           'ReportController@store')->name('store');
Route::get('listlaporan',                           'ReportController@index')->name('laporan');

=======
<<<<<<< HEAD
Route::get('/formlapor',                            'ReportController@formlapor')->name('buat');
Route::post('/formlapor',                           'ReportController@store')->name('store');
Route::get('listlaporan',                           'ReportController@index')->name('laporan');
=======
Route::get('/formlapor',                          'ReportController@formlapor')->name('buat');
Route::post('/formlapor',                         'ReportController@store')->name('store');
Route::get('/listlaporan',                           'ReportController@index')->name('laporan');
>>>>>>> 4805d50917ed9b573540c2dff9c9953345918049
>>>>>>> ac372374ee2abffb45c10f44fe8fbaa0d9cfdd62
Route::get('/reports/{id}',                         'UtamaController@show')->name('show');

Route::post('/hasilpencarian',                       'UtamaController@cari')->name('cari');

Route::post('/laporan/{id}/edit',                   'ReportController@edit')->name('edit');
Route::post('/laporan/{id}/edit/edit',              'ReportController@update')->name('storeedit');
Route::post('/laporan/{id}/delete',                 'ReportController@destroy')->name('delete');


// Route Baru
<<<<<<< HEAD
Route::post('/search',                               'UtamaController@cari')->name('search');
=======
Route::get('/search',                               'UtamaController@search')->name('search');


>>>>>>> ac372374ee2abffb45c10f44fe8fbaa0d9cfdd62
