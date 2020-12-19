<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/search', [IndexController::class, 'search']);
Route::get('/reports/create', [IndexController::class, 'create']);
Route::post('/reports/save', [IndexController::class, 'store']);
Route::get('/reports/{posts}', [IndexController::class, 'show']);
Route::delete('/reports/{posts}', [IndexController::class, 'destroy']);
Route::get('/reports/{posts}/edit', [IndexController::class, 'edit']);
Route::patch('/reports/{posts}', [IndexController::class, 'update']);
