<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Pendidikan;
use App\Http\Controllers\Pegawai;

Route::get('/', [Home::class, 'index']);
Route::get('/home', [Home::class, 'index']);
Route::get('/jabatan', [Jabatan::class, 'index']);
Route::get('/pendidikan', [Pendidikan::class, 'index']);
Route::get('/pegawai', [Pegawai::class, 'index']);

