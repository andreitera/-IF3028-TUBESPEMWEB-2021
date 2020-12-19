<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

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

Route::get('/', function () {
    return view('detail');
});
Route::post('edit', [LaporanController::class, 'edit']);
Route::post('update', [LaporanController::class, 'update']);
Route::post('create', [LaporanController::class, 'create']);
Route::post('index', [LaporanController::class, 'index']);
Route::post('show', [LaporanController::class, 'show']);
Route::post('delete', [LaporanController::class, 'delete']);
