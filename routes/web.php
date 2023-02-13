<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;


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

Route::get('login', [LoginController::class, 'view'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'proses'])->name('login.proses')->middleware('guest');

Route::get('/dashboard/admin', [Dashboard::class, 'admin'])->name('dashboard.admin')->middleware(['auth', 'level:admin,petugas, siswa']);
Route::get('/dashboard/petugas', [Dashboard::class, 'petugas'])->name('dashboard.petugas')->middleware(['auth', 'level:petugas']);

Route::resource('siswa', SiswaController::class);
Route::resource('spp', SppController::class)->middleware(['auth','level:admin']);

Route::view('error/403', 'error.403')->name('error.403');