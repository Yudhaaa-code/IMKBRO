<?php

use App\Http\Controllers\cocController;
use App\Http\Controllers\freeFireController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mlbbController;
use App\Http\Controllers\pointblankController;
use App\Http\Controllers\pubgController;
use App\Http\Controllers\ValorantController;
use App\Http\Controllers\PembayaranController;
use App\Models\Pembayaran;

Route::get('/', function () {
    return view('home');
});

Route::get('/team', function () {
    return view('team');
});


Route::resource('/ff', freeFireController::class);
Route::resource('/mlbb', mlbbController::class);
Route::resource('/valorant', ValorantController::class);
Route::resource('/pubg', pubgController::class);
Route::resource('/coc', cocController::class);
Route::resource('/pb', pointblankController::class);
Route::get('/pembayaran/create', [PembayaranController::class, 'create'])->name('create');
Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->name('store');