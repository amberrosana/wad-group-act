<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'showAllUsers']);

Route::get('/products', [ProductController::class, 'showAllProducts']);

Route::get('user/{id}/products', [UserController::class, 'getProducts']);

Route::get('/product/{id}/users', [ProductController::class, 'getUsers']);