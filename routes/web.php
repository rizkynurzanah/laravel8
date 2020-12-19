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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/tambah/{nilai1}/{nilai2}', function($n1,$n2){
    return 'Total dari '.$n1.' + '.$n2.' = '.($n1+$n2);
});

Route::get('/luas_kubus/{nilai1}', function($n1){
    return 'Luas kubus sisi '.$n1.' = '.($n1*$n2);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/berita','App\Http\Controllers\BeritaController@index')->name('berita.index');
Route::get('/berita/create',[App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita',[App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{id}',[App\Http\Controllers\BeritaController::class, 'show'])->name('berita.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kecamatan','App\Http\Controllers\KecamatanController@index')->name('kecamatan.index');
Route::get('/kecamatan/create',[App\Http\Controllers\KecamatanController::class, 'create'])->name('kecamatan.create');
Route::post('/kecamatan',[App\Http\Controllers\KecamatanController::class, 'store'])->name('kecamatan.store');
Route::get('/kecamatan/{id}',[App\Http\Controllers\KecamatanController::class, 'show'])->name('kecamatan.show');