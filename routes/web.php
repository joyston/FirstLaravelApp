<?php

use App\Http\Controllers\TshirtsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Get routes
Route::get('/Tshirts', [TshirtsController::class, 'index'])->name('tshirts.index');
Route::get('/Tshirts/create', [TshirtsController::class, 'create'])->name('tshirts.create');
Route::get('/Tshirts/{tshirt}/edit', [TshirtsController::class, 'edit'])->name('tshirts.edit');

//Post route
Route::post('/Tshirts', [TshirtsController::class, 'store'])->name('tshirts.store');
Route::put('/Tshirts/{tshirt}/update', [TshirtsController::class, 'update'])->name('tshirts.update');
Route::delete('/Tshirts/{tshirt}/delete', [TshirtsController::class, 'remove'])->name('tshirts.delete');
