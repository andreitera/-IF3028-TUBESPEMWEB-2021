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

Route::get('/', 'LaporController@listView')->name('listView');
Route::get('/profil', 'ProfileController@showProfile')->name('showProfile');
Route::get('/comment', 'LaporController@viewComment')->name('viewComment');
Route::get('/lapor', 'LaporController@viewLapor')->name('viewLapor');