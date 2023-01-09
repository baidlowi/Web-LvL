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

use App\Http\Controllers\ViewController;
use PhpParser\Node\Stmt\Return_;

Route::get('/', function () {
    return view('welcome');
});

Route::get('tugas4', function () {
    return view('tugas4jq');
});

Route::get('praktikum', function () {
    return view('praktikum2');
});

//melalui controler
Route::get('ets2021',"ViewController@showETS") ;
Route::get('greetings',"ViewController@showGreetings") ;
Route::post('sayhi',"ViewController@sayHi") ;

//route CRUD Pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//route CRUD Pendapatan
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{ID}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{ID}','PendapatanController@hapus');

//route CRUD Absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//Route Search
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');

//route CRUD keyboard
Route::get('/keyboard','KeyboardController@index');
Route::get('/keyboard/tambah','KeyboardController@tambah');
Route::post('/keyboard/store','KeyboardController@store');
Route::get('/keyboard/edit/{id}','KeyboardController@edit');
Route::post('/keyboard/update','KeyboardController@update');
Route::get('/keyboard/hapus/{id}','KeyboardController@hapus');
Route::get('/keyboard/cari','KeyboardController@cari');
Route::get('/keyboard/detail/{id}','KeyboardController@view');

//route CRUD Belanja
Route::get('/keranjangbelanja','BelanjaController@index');
Route::get('/keranjangbelanja/tambah','BelanjaController@tambah');
Route::post('/keranjangbelanja/store','BelanjaController@store');
Route::get('/keranjangbelanja/edit/{id}','BelanjaController@edit');
Route::post('/keranjangbelanja/update','BelanjaController@update');
Route::get('/keranjangbelanja/hapus/{id}','BelanjaController@hapus');
Route::get('/keranjangbelanja/cari','BelanjaController@cari');
Route::get('/keranjangbelanja/detail/{id}','BelanjaController@view');
