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

Route::get('/',                                     'LaporController@home')->name('home');
Route::get('lapor',                                 'LaporController@index')->name('lapor');
Route::get('lapor/create',                          'LaporController@create')->name('laporbuatView');
Route::post('lapor/create',                         'LaporController@store')->name('laporbuat');
Route::get('lapor/show/{id}',                       'LaporController@show')->name('laporShow');
Route::get('success',                               'LaporController@sendEmail')->name('sendemail');
Route::post('lapor/{unique_id}/edit',               'LaporController@edit')->name('laporedit');
Route::post('lapor/{unique_id}/edit/token',         'LaporController@update')->name('laporupdate');
Route::post('lapor/{unique_id}/delete',             'LaporController@destroy')->name('laporhapus');
Route::post('lapor/getuniqid',                      'LaporController@getUniqueId')->name('laporcek');
