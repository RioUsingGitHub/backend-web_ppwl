<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController; // tambahkan ini
use Illuminate\Support\Facades\Route;

Route::apiResource('users', UserController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('categories', CategoryController::class); // tambahkan ini