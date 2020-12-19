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
Route::post('/login-post',              'AuthController@loginPost')->name('login.user.post');


Route::get('/',                         'LaporController@index')->name('landing');
Route::post('/post-laporan',            'LaporController@postLapor')->name('post.lapor');

Route::get('/lapors',              'LaporController@listView')->name('listView');
Route::get('/profil',                   'ProfileController@showProfile')->name('showProfile');
Route::get('/view-lapor/{id}',          'LaporController@viewLapor')->name('viewLapor');
Route::get('/search/{query}',           'LaporController@viewSearch')->name('viewSearch');

//----------- Route Comment -----------
// Route::get('/lapor',            'LaporController@viewLapor')->name('viewLapor');