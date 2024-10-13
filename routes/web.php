<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index'); // Dashboard
Route::get('/profile', [UserController::class, 'index']); // Profile
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show'); // Post Preview
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit'); // Post Preview Edit

Route::post('/post', [PostController::class, 'store'])->name('post.store'); // Create Post
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy'); // Delete Post
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update'); // Update Post

// Route::get('/profile', function () {
//     return view('profile');
// });