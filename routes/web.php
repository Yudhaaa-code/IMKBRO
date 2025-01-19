<?php

use App\Http\Controllers\freeFireController;
use App\Http\Controllers\imageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product-detail', function () {
    return view('/product-detail');
});
 
Route::resource('/home', imageController::class);
Route::get('/', [imageController::class, 'index']);
Route::get('/produk/{id}', [imageController::class, 'show'])->name('produk.show');


Route::resource('/ff', freeFireController::class);
Route::get('/', [freeFireController::class, 'index']);