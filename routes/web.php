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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@home');
Route::get('/login', 'LoginController@login');
Route::post('/proses', 'LoginController@proses');

//ROUTE PEGAWAI
Route::get('/admin/home', 'DashboardController@home');
Route::get('/admin/pegawai', 'PegawaiController@index');
Route::get('/admin/tambah_pegawai', 'PegawaiController@create');
Route::post('/admin/pegawai', 'PegawaiController@store');
Route::get('/admin/pegawai/delete/{id}', 'PegawaiController@destroy');
Route::get('/admin/edit_pegawai/{pegawai}', 'PegawaiController@edit');
Route::patch('/admin/edit_pegawai/{pegawai}', 'PegawaiController@update');

Route::get('/admin/pegawai/{pegawai}', 'PegawaiController@show');

//Route Jabatan
Route::get('/admin/jabatan', 'JabatanController@index');
Route::post('/admin/jabatan', 'JabatanController@store');
Route::get('/admin/jabatan/{id}/delete', 'JabatanController@destroy');
// Route::get('/admin/jabatan/{jabatan}/update', 'JabatanController@edit');
// Route::patch('/admin/jabatan/{jabatan}/update', 'JabatanController@update');

//Route Laporan
Route::get('/admin/laporan', 'LaporanController@index');
Route::post('/admin/laporan', 'LaporanController@store');
Route::patch('/admin/laporan/update/{id}', 'LaporanController@update');
Route::get('/admin/laporan/{id}', 'LaporanController@destroy');











