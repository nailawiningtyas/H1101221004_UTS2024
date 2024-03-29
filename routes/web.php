<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\pegawai;
use App\Http\Controllers\jabatan;
use App\Http\Controllers\pendidikan;

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

Route::get('/', [home::class, 'index']);
Route::get('/home', [home::class, 'index']);
Route::get('/pegawai', [pegawai::class, 'index']);
Route::get('/jabatan', [jabatan::class, 'index']);
Route::get('/pendidikan', [pendidikan::class, 'index']);
