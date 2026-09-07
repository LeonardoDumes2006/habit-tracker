<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// SITE
Route::get('/', [PageController::class, 'index']);

// LOGIN
Route::get('/login', [LoginController::class, 'index']); 