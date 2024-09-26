<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::get('/profile', [UserController::class, 'index']);

// Route::get('/profile', function () {
//     return view('profile');
// });