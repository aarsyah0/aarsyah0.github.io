<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\GetDataController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', [HomeController::class, 'index']);
Route::get('biodata', [HomeController::class, 'biodata']);
Route::get('postdata', [App\Http\Controllers\RequestController::class, 'viewPostData']);
Route::post('postdata', [App\Http\Controllers\RequestController::class, 'processPostData']);
Route::get('getdata', [App\Http\Controllers\GetDataController::class, 'viewGetData']);

Route::get('dashboard', function () {
    return view('layouts.dashboard');
})->name('dashboard');

Route::controller(BarangController::class)->prefix('barang')->group(function(){
    Route::get('', 'index')->name('barang');
    Route::get('tambah', 'tambah')->name('barang.tambah');
    Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('barang.edit');
    Route::post('edit/{id}', 'update')->name('barang.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('barang.hapus');
});
