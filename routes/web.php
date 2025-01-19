<?php

use App\Http\Controllers\cocController;
use App\Http\Controllers\freeFireController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mlbbController;
use App\Http\Controllers\pointblankController;
use App\Http\Controllers\pubgController;
use App\Http\Controllers\ValorantController;

Route::get('/', function () {
    return view('home');
});


Route::resource('/ff', freeFireController::class);
Route::resource('/mlbb', mlbbController::class);
Route::resource('/valorant', ValorantController::class);
Route::resource('/pubg', pubgController::class);
Route::resource('/coc', cocController::class);
Route::resource('/pb', pointblankController::class);
