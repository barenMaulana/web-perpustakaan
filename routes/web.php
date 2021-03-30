<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

Route::get('/', [Home::class,'index'])->name('/');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
