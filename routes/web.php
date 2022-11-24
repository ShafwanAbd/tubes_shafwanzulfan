<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Tugas;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\KirimTugasController;

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

Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::post('/tugas/order', [OrderController::class, 'order']);

    Route::get('/home', [HomeController::class, 'home']);
    Route::get('/home_main', [HomeController::class, 'home_main']);

    Route::resource('user', UserController::class);
    
    Route::resource('tugas', TugasController::class);

    Route::resource('konfirmasi', KonfirmasiController::class);

    Route::resource('kirimTugas', KirimTugasController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
