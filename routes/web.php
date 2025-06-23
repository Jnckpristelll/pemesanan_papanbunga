<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cektemplate', function(){
    return view('layouts.template');
});

Route::get('/dashboard', function(){
    return view('layouts.dashboard.index');
});

Route::get('/pelanggan', function(){
    return view('layouts.pelanggan.index');
});

Route::get('/produk', function(){
    return view('layouts.produk.index');
});

Route::get('/pesanan', function(){
    return view('layouts.pesanan.index');
});

Route::get('/detailpesanan', function(){
    return view('layouts.detail_pesanan.index');
});




Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');

Route::resource('/pelanggan', \App\Http\Controllers\PelangganController::class);

Route::get('/dosen', [dosenController::class, 'index']);



