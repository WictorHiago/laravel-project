<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('api/users', [\App\Http\Controllers\UserController::class, 'store']);
Route::post('api/posts', [\App\Http\Controllers\PostController::class, 'store']);
Route::post('api/comments', [\App\Http\Controllers\CommentController::class, 'store']);
