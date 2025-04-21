<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\::class, 'index'])->name('home');

Route::get('/barang', [App\Http\Controllers\::class, 'index'])->name('barang');
