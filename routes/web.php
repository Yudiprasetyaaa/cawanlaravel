<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LihatController;
use GuzzleHttp\Middleware;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/lowongan_pekerjaan', [HomeController::class, 'lowongan']);
Route::get('/about', [HomeController::class, 'aboutus']);

Route::resource('pelamar_index', PelamarController::class);
Route::resource('lowongan_index', LowonganController::class)->middleware('role:admin|perusahaan');
Route::resource('users', UserController::class);
Route::resource('profil', ProfilController::class)->middleware('role:pelamar');
Route::resource('view', LihatController::class);
