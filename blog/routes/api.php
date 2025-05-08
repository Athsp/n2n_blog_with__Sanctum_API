<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);

    Route::middleware('admin')->group(function () {
        Route::get('/admin/posts', [AdminController::class, 'allPosts']);
        Route::patch('/admin/posts/{id}/status', [AdminController::class, 'updatePostStatus']);
        Route::get('/admin/users', [AdminController::class, 'allUsers']);
        Route::patch('/admin/users/{id}/status', [AdminController::class, 'updateUserStatus']);
    });
});