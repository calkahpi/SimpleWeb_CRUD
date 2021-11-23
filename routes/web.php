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
Route::get('/Sample', function() {
    return view('Sample');
});
//KALKULATOR
Route::GET('/kalkulator', 'kalkulator@index')->name("klk");
Route::GET('/kalkulatorpj', 'kalkulator@penjumlahan')->name("jmlh");
Route::GET('/kalkulatorpk', 'kalkulator@pengurangan')->name("krng");
Route::GET('/kalkulatorpb', 'kalkulator@pembagian')->name("bg");
Route::GET('/kalkulatorpkl', 'kalkulator@perkalian')->name("kali");
Route::GET('/kalkulatorpm', 'kalkulator@modulus')->name("mod");
//PERTEMUAN3
Route::GET('/dosen', 'DosenController@index')->name("dosenlist");
Route::GET('/dosentmbh', 'DosenController@tambah')->name("add");
Route::post('/dosensave', 'DosenController@InputData')->name("save");
//DOSEN
Route::get('/data_dosen','Dosen1Controller@index')->name('dtdosen');
//TAMBAH
Route::get('/tambah_dosen','Dosen1Controller@create')->name('tmbhdosen');
Route::post('/simpan_dosen','Dosen1Controller@store')->name('smpndosen');

//HAPUS
Route::get('/dosen1/{id}/destroy','Dosen1Controller@destroy')->name('hps');

//EDIT
Route::get('/dosen1/{id}/edit','Dosen1Controller@edit');
Route::post('/dosen1/{id}/update','Dosen1Controller@update');