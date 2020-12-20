<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Models\Laporan;

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

Route::get('/', [LaporanController::class, 'index']);
Route::post('edit', [LaporanController::class, 'edit']);
Route::post('update', [LaporanController::class, 'update']);
Route::post('create', [LaporanController::class, 'store']);
Route::post('index', [LaporanController::class, 'index']);
Route::post('show', [LaporanController::class, 'show']);
Route::post('delete', [LaporanController::class, 'destroy']);
Route::post('cari', [LaporanController::class, 'cari']);
Route::get('form', function () {
    return view("form");
});
Route::get('home', function () {
    $data = Laporan::orderByDesc('created_at', )->get();
    return view('bodyhome', ["data" => $data]);
});
Route::get('detail/{id}', [LaporanController::class, 'detail']);
