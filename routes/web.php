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


// login dulu baru bisa management data
Route::get('/', function () {
    return view('auth/login');
});


// Route::resource('karyawan', 'DataKaryawan');
// Route::get('karyawan/json/fetch','DataKaryawan@json')->name('karyawan.fetch');

// Route::resource('barang', 'DataBarang');
// Route::get('barang/json/fetch','DataBarang@json')->name('barang.fetch');

// Route::resource('pelanggan', 'DataPelanggan');
// Route::resource('kategori', 'KategoriBarangController');



Auth::routes(['verify' => true]);

// route dashboard (setelah login berhasil)
Route::get('/home', 'HomeController@index')->name('home');

// route untuk menghindari akses sistem sebelum user login
// jadi user login dulu baru bisa akses sistem management / CRUD nya 
Route::group(['middleware' => ['auth', 'verified']], function() {
	Route::resource('/karyawan', 'DataKaryawan');
	Route::get('karyawan/json/fetch','DataKaryawan@json')->name('karyawan.fetch');

	Route::resource('barang', 'DataBarang');
	Route::get('barang/json/fetch','DataBarang@json')->name('barang.fetch');

	Route::resource('pelanggan', 'DataPelanggan');
	Route::resource('kategori', 'KategoriBarangController');
});
