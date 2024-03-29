<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Pendidikan;
use App\Http\Controllers\Pegawai;

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/home', [Home::class, 'index'])->name('home');
Route::get('/jabatan', [Jabatan::class, 'index'])->name('jabatan');
Route::get('/pendidikan', [Pendidikan::class, 'index'])->name('pendidikan');
Route::get('/pegawai', [Pegawai::class, 'index'])->name('pegawai');

