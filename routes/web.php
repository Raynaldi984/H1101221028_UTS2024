<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.main');
});

Route::get('/jabatan', [MainController::class, 'view_jabatan']);
Route::get('/gaji', [MainController::class, 'view_gaji']);
Route::get('/presensi', [MainController::class, 'view_presensi']);