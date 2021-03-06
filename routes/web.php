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
    return view('welcome');
});

Route::get('tugas4', function (){
    return view('tugas4js');
});

Route::get('praktikum2', function (){
    return view('formvalidation');
});

Route::get('ets2021',"ViewController@showETS") ;

Route::get('tugas5',"ViewController@showPHP") ;

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/sepeda','SepedaController@index');
Route::get('/sepeda/tambah','SepedaController@tambah');
Route::post('/sepeda/store','SepedaController@store');
Route::get('/sepeda/edit/{id}','SepedaController@edit');
Route::post('/sepeda/update','SepedaController@update');
Route::get('/sepeda/hapus/{id}','SepedaController@hapus');
Route::get('/sepeda/cari','SepedaController@cari');


Route::get('/karyawan','KaryawanController@index');
Route::get('/karyawan/edit/{id}','KaryawanController@edit');
Route::post('/karyawan/update','KaryawanController@update');
Route::get('/karyawan/view','KaryawanController@view');



