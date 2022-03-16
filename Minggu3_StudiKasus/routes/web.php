<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pinjam', function () {
    return view('pinjam');
});

Route::get('/kembali', function () {
    return view('kembali');
});

Route::get('/formPinjam', function () {
    return view('formPinjam');
});

// Anggota

Route::get('/anggota', [AnggotaCtrl::class, 'index']);
Route::get('/anggota/tambah', [AnggotaCtrl::class, 'create']);
Route::post('/anggota/store', [AnggotaCtrl::class, 'store'])->name('storeAnggota');
Route::get('/anggota/{id}/edit', [AnggotaCtrl::class, 'edit'])->name('detail');
Route::post('/anggota/update/{id}',[AnggotaCtrl::class, 'update'])->name('updateForm');
Route::get('/anggota/delete/{id}',[AnggotaCtrl::class, 'destroy'])->name('hapus');

// Petugas
Route::get('/petugas', [PetugasCtrl::class, 'index']);
Route::get('/petugas/tambah_petugas', [PetugasCtrl::class, 'create']);
Route::post('/petugas/store', [PetugasCtrl::class, 'store'])->name('storePetugas');
Route::get('/petugas/{id}/edit', [PetugasCtrl::class, 'edit'])->name('detail_petugas');
Route::post('/petugas/update/{id}',[PetugasCtrl::class, 'update'])->name('updatepetugas');
Route::get('/petugas/delete/{id}',[PetugasCtrl::class, 'destroy'])->name('hapus_petugas');

// Buku
Route::get('/buku' , [BukuCtrl::class, 'index']);
Route::get('/buku/tambah_buku', [BukuCtrl::class, 'create']);
Route::post('/buku/store', [BukuCtrl::class, 'store'])->name('storeBuku');
Route::get('/buku/{id}/edit',[BukuCtrl::class, 'edit'])->name('detail_buku');
Route::post('/buku/update/{id}',[BukuCtrl::class, 'update'])->name('updatebuku');
Route::get('/buku/delete/{id}',[BukuCtrl::class, 'destroy'])->name('hapus_buku');

Route::get('/home', function () {
    return view('home');
});
