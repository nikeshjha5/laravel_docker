<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/create', [\App\Http\Controllers\UserController::class, 'create']);

Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);
