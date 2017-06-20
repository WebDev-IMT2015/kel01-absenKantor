<?php

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
    return view('index');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('history', 'absenController@history');

Route::get('absen_masuk', 'absenController@indexMasuk');
Route::post('absen_masuk', 'absenController@absenMasuk');

Route::get('absen_keluar', 'absenController@indexKeluar');
Route::post('absen_keluar', 'absenController@absenKeluar');

Route::get('absen_mulai', 'absenController@indexMulai');
Route::post('absen_mulai', 'absenController@absenMulai');

Route::get('absen_selesai', 'absenController@indexSelesai');
Route::post('absen_selesai', 'absenController@absenSelesai');

Route::get('input', 'tambahPegawaiController@index');
Route::post('input', 'tambahPegawaiController@simpan');

Route::get('setTime', 'setWaktuController@index');
Route::post('setTime', 'setWaktuController@simpan');

Route::get('list', 'tambahPegawaiController@indexView');

Route::get('admin/hapus/{nip}', 'tambahPegawaiController@hapus');
Route::get('admin/{nip}/edit', 'tambahPegawaiController@edit')->name('admin.edit');
Route::post('admin/edit', 'tambahPegawaiController@update')->name('admin.update');
