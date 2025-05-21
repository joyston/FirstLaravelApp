<?php

use App\Http\Controllers\TshirtsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Get routes
Route::get('/Tshirts', [TshirtsController::class, 'index'])->name('tshirts.index');
Route::get('/Tshirts/create', [TshirtsController::class, 'create'])->name('tshirts.create');

//Post route
Route::post('/Tshirts', [TshirtsController::class, 'store'])->name('tshirts.store');
