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

/**
 * Route Home
 */
Route::get('/',                                     'LaporController@home')->name('home');

/**
 * Route List Lapor
 */
Route::get('lapor',                                 'LaporController@index')->name('lapor');
Route::get('lapor/dosen',                                 'LaporController@dosen')->name('lapordosen');
Route::get('lapor/matkul',                                 'LaporController@matkul')->name('lapormatkul');
Route::get('lapor/prodi',                                 'LaporController@prodi')->name('laporprodi');
Route::get('lapor/mahasiswa',                                 'LaporController@mahasiswa')->name('lapormahasiswa');

/**
 * Route Create Lapor and Store Lapor to database
 */

Route::get('lapor/create',                          'LaporController@create')->name('laporbuatView');
Route::post('lapor/create',                         'LaporController@store')->name('laporbuat');

/**
 * Route View Laporan
 */
Route::get('lapor/show/{id}',                       'LaporController@show')->name('laporShow');

/**
 * Route to Send Email after Create Lapor
 */
Route::get('lapor/success',                         'LaporController@sendEmail')->name('sendemail');

/**
 * Route Get Unique Id to Edit and Delete Lapor
 */
Route::post('lapor/getuniqid',                      'LaporController@getUniqueId')->name('laporcek');

/**
 * Route Edit Lapor to database
 */
Route::post('lapor/{unique_id}/edit',         'LaporController@update')->name('laporupdate');

/**
 * Route Search Lapor
 */
Route::post('lapor/search',                         'LaporController@search')->name('searchlapor');

/**
 * Route Tentang Lapor
 */
Route::post('lapor/tentang',                         'LaporController@tentang')->name('tentang');
