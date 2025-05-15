<?php

use App\Http\Controllers\TshirtsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/Tshirts', [TshirtsController::class, 'index'])->name('tshirts.index');
