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
use Illuminate\Http\Request;
use App\Http\Controllers\LaporanController;
Route::get('/',[LaporanController::class,'index']);
Route::resource('laporan', LaporanController::class);
Route::get('/search',[LaporanController::class,'search']);
