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
