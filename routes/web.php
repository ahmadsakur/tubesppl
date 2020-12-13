<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
    return view('welcome');
});

Auth::routes();

//admin
Route::middleware('role:admin')->get('/dashboard', [App\Http\Controllers\HomeController::class, 'admin'])->name('dashboard');
Route::middleware('role:admin')->get('/dashboard/{ruang_id}', [App\Http\Controllers\HomeController::class, 'detailruang']);
Route::middleware('role:admin')->resource('pegawai', App\Http\Controllers\PegawaiController::class);
Route::middleware('role:admin')->resource('ruang', App\Http\Controllers\RuangController::class);
Route::middleware('role:admin')->resource('penugasan', App\Http\Controllers\PenugasanController::class);


//cleaner
Route::middleware('role:cleaner')->get('/home', [App\Http\Controllers\HomeController::class, 'cs'])->name('home');
Route::middleware('role:cleaner')->get('/submit/{ruang_id}', [App\Http\Controllers\HomeController::class, 'submission']);
Route::middleware('role:cleaner')->put('/submit/{ruang_id}', [App\Http\Controllers\HomeController::class, 'updatestatus']);


