<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;

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
    return view('index');
}); 


Route::get('/investasi', function () {
    return view('investasi');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/pusat-informasi', function () {
    return view('pusat-informasi');
});

Route::get('/layanan-pengaduan', function () {
    return view('layanan-pengaduan');
});
Route::get('/detail', function () {
    return view('detail');
});

Route::get('/pembelian', function () {
    return view('pembelian');
});



Route::get('/masuk', [LoginController:: class, 'masuk']);
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');


Route::get('/daftar', [LoginController::class, 'daftar']);


Route::post('create-user', [LoginController::class, 'regis_user']);

Route::get('/admin', function () {
    return view('admin');
});

// unit 
Route::get('/unit', [UnitController:: class, 'index']);



