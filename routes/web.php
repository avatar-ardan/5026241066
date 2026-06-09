<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BajuDBController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/', [PageController::class, 'halaman']);
Route::get('welcome', [PageController::class, 'welcome']);
Route::get('template', [PageController::class, 'template']);
Route::get('responsive', [PageController::class, 'responsive']);
Route::get('pertemuan4', [PageController::class, 'pertemuan4']);
Route::get('news1', [PageController::class, 'news1']);
Route::get('news', [PageController::class, 'news']);
Route::get('intro', [PageController::class, 'intro']);
Route::get('contoh', [PageController::class, 'contoh']);
Route::get('indexio', [PageController::class, 'indexio']);
Route::get('pertemuan5', [PageController::class, 'pertemuan5']);
Route::get('tugasLinktree', [PageController::class, 'tugasLinktree']);
Route::get('makeover-ig', [PageController::class, 'makeoverig']);

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route CRUD
Route::get('/pegawai',[PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

Route::get('/baju',[BajuDBController::class, 'index']);
Route::get('/baju/tambah',[BajuDBController::class, 'tambah']);
Route::post('/baju/store',[BajuDBController::class, 'store']);
Route::get('/baju/edit/{id}',[BajuDBController::class, 'edit']);
Route::post('/baju/update',[BajuDBController::class, 'update']);
Route::get('/baju/hapus/{id}',[BajuDBController::class, 'hapus']);
Route::get('/baju/cari',[BajuDBController::class, 'cari']);
