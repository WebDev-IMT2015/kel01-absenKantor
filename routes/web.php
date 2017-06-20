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

Route::get('admin', function () {
    return view('admin');
});

Route::get('/', function () {
    return view('index');
});

// Route::get('input', function () {
//     return view('admin_input');
// });

Route::get('input', 'tambahPegawaiController@index');
Route::post('input', 'tambahPegawaiController@simpan');

Route::get('setTime', 'setWaktuController@index');
Route::post('setTime', 'setWaktuController@simpan');

Route::get('list', 'tambahPegawaiController@indexView');

Route::get('admin/hapus/{nip}', 'tambahPegawaiController@hapus');
Route::get('admin/{nip}/edit', 'tambahPegawaiController@edit')->name('admin.edit');
Route::post('admin/edit', 'tambahPegawaiController@update')->name('admin.update');
