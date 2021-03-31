<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;

Route::get('/', [HomeController::class,'index'])->name('/');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::Class,'index'])->name('dashboard');
    Route::get('/books',[BookController::Class,'index'])->name('books');
});