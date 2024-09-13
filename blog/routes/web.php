<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('api/users', [\App\Http\Controllers\UserController::class, 'store']);
Route::get('api/users', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('api/users/{user}', [\App\Http\Controllers\UserController::class, 'show']);
Route::put('api/users/{id}', [\App\Http\Controllers\UserController::class, 'update']);
Route::delete('api/users/{id}', [\App\Http\Controllers\UserController::class, 'destroy']);


Route::post('api/posts', [\App\Http\Controllers\PostController::class, 'store']);
Route::post('api/comments', [\App\Http\Controllers\CommentController::class, 'store']);
