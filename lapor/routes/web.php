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

// Auth
Route::get('/register',                 'AuthController@register')->name('register.user');
Route::get('/login',                    'AuthController@login')->name('login.user');


Route::get('/',                 'LaporController@index')->name('landing');
Route::get('/lapors',           'LaporController@listView')->name('list.laporan');
Route::get('/profil',           'ProfileController@showProfile')->name('showProfile');
Route::get('/view-lapor',       'LaporController@viewLapor')->name('viewComment');
Route::get('/search',           'LaporController@viewSearch')->name('viewSearch');

//----------- Route Comment -----------
// Route::get('/lapor',            'LaporController@viewLapor')->name('viewLapor');