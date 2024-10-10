<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/profile', [UserController::class, 'index']);
Route::post('/post/{id}', [DashboardController::class, 'show'])->name('post.show');

// Route::get('/profile', function () {
//     return view('profile');
// });