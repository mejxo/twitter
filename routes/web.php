<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('/profile', [UserController::class, 'index']);
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');

// Route::get('/profile', function () {
//     return view('profile');
// });