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
    return view('Data_Barang/data-barang');
});

 Route::resource('karyawan', 'DataKaryawan');
 Route::get('karyawan/json/fetch','DataKaryawan@json')->name('karyawan.fetch');


Route::resource('barang', 'DataBarang');
Route::get('barang/json/fetch','DataBarang@json')->name('barang.fetch');

Route::resource('pelanggan', 'DataPelanggan');

Route::resource('kategori', 'KategoriBarangController');

