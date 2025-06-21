<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.dashboard');
});

Route::get('/pelanggan', function(){
    return view('layouts.pelanggan');
});

Route::get('/produk', function(){
    return view('layouts.produk');
});

Route::get('/pesanan', function(){
    return view('layouts.pesanan');
});

Route::get('/detailpesanan', function(){
    return view('layouts.detailpesanan');
});

