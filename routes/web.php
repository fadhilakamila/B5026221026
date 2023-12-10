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
    return view('laravel-landing-page');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('halo', function () {
    return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('/halo2', function ($id) {
    return "<h1>Haloo Apa Kabar?<h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('file_1', function () {
    return view('pertemuan-1');
});

Route::get('file_2-1', function () {
    return view('pertemuan-2-1');
});

Route::get('file_2-2', function () {
    return view('pertemuan-2-2');
});

Route::get('file_3', function () {
    return view('pertemuan-3');
});

Route::get('file_4-1', function () {
    return view('pertemuan-4-1');
});

Route::get('file_4-2', function () {
    return view('pertemuan-4-2');
});

Route::get('file_5', function () {
    return view('pertemuan-5');
});

Route::get('file_6', function () {
    return view('tugas-pembuatan-lay-out');
});

Route::get('file_7', function () {
    return view('tugas-replika-link-tree');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

// Di dalam {} adalah nama variabelnya ({} adalah wildcard untuk mengambil apapun isi dari slash "/")
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
// Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
// Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
// Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
// Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
// Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
// Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
// Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

// === Route untuk CRUD (pegawaiController) ===
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
// Create
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah'); // tidak perlu Primary Key
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
// Update
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit'); // "{}" berisi Primary Key
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
// Delete
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus'); // "{}" berisi Primary Key
// Searching
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
// Read record tertentu
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view'); // "{}" berisi Primary Key


// === Latihan Soal D4 ===
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangBelanjaController@add');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangBelanjaController@hapus');


// === Tugas Pra EAS ===
Route::get('/masker','App\Http\Controllers\MaskerController@index');
Route::get('/masker/add','App\Http\Controllers\MaskerController@add');
Route::post('/masker/store','App\Http\Controllers\MaskerController@store');
Route::get('/masker/edit/{id}','App\Http\Controllers\MaskerController@edit');
Route::post('/masker/update','App\Http\Controllers\MaskerController@update');
Route::get('/masker/delete/{id}','App\Http\Controllers\MaskerController@delete');
Route::get('/masker/view/{id}','App\Http\Controllers\MaskerController@view');
Route::get('/masker/cari','App\Http\Controllers\MaskerController@cari');

// === Latihan Soal D5 ===
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/add','App\Http\Controllers\NilaiKuliahController@add');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');
