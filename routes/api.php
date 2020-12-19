<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('/reg','Api@reg');
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('/show','UserController@show')->middleware('jwt.verify');

