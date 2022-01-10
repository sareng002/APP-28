<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'index']);

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class,'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store'])->middleware('guest');

Route::get('/Dashboard',[DashboardController::class,'index'])->middleware('auth');
