<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'Login']);
Route::post('postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('home', [HomeController::class]);

Route::resource('user', UserController::class);
