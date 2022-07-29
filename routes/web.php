<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\FasilitasKamarController;

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

Route::get('/home', function () {
    return view('index');
});

Route::get('/booking', function () {
    return view('booking');
});

// Kamar
Route::resource('kamar',KamarController::class);

// Fasilitas Hotel
Route::resource('fasilitas-hotel',FasilitasHotelController::class);

// Pemesanan
Route::resource('pemesanan', PemesananController::class); 