<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// default
Route::get('/', function () {
    return redirect('/login');
});

// login
Route::get('/login', [AuthController::class, 'login']);
Route::post('/auth', [AuthController::class, 'auth']);

// register
Route::get('/registration', [AuthController::class, 'registration']);
Route::post('/register', [AuthController::class, 'register']);

// home
Route::get('/home', [AuthController::class, 'home']);

// logout
Route::post('/logout', [AuthController::class, 'logout']);