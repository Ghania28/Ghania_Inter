<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\GetDataController;
use App\Http\Controllers\RequestController;

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

// Route::get('/coba', [CobaController::class, 'index']);

Route::get('/belajar', [BelajarController::class, 'index']);

Route::get('/biodata', [BelajarController::class, 'biodata']);

Route::get('/belajar/nama', [BelajarController::class, 'getNama']);

Route::get('getdata', [GetDataController::class, 'viewGetData']);

Route::get('pendaftaran', [RequestController::class, 'viewPostData']);
Route::post('pendaftaran', [RequestController::class, 'processPostData']);