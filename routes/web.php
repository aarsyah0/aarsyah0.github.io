<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
    return view('login');
});
Route::get('home', [HomeController::class, 'index']);
Route::get('biodata', [HomeController::class, 'biodata']);
Route::get('postdata', [App\Http\Controllers\RequestController::class, 'viewPostData']);
Route::post('postdata', [App\Http\Controllers\RequestController::class, 'processPostData']);
Route::get('getdata', [App\Http\Controllers\GetDataController::class, 'viewGetData']);