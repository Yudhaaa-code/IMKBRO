<?php

use App\Http\Controllers\imageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/mlbb', function () {
    return view('mlbb');
});

Route::get('/product-detail', function () {
    return view('/product-detail');
});
 
Route::resource('/home', imageController::class);
Route::get('/', [imageController::class, 'index']);
Route::get('/imgprod/{id}', [imageController::class, 'show'])->name('imgprod.show');
