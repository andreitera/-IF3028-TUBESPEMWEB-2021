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

Route::get('/','Controller@index');
Route::get('/login', function () {
    return view('login');
});
Route::get('/masuk', function () {
    return view('masuk');
});
Route::get('/register', function () {
    return view('register');
});


Route::get('/halamanlpr', function () {
    return view('halamanlapor');
});

Route::post('/registerUser','Controller@registerUser');

Route::post('/loginUser','Controller@loginUser');
