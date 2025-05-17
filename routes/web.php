<?php

use App\Http\Controllers\TshirtsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/Tshirts', [TshirtsController::class, 'index'])->name('tshirts.index');
Route::get('/Tshirts/create', [TshirtsController::class, 'create'])->name('tshirts.create');
Route::post('/Tshirts', [TshirtsController::class, 'store'])->name('tshirts.store');
