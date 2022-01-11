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

Route::get('/Dashboard',[DashboardController::class,'index'])->name('Dashboard')->middleware('auth');
Route::get('/tambahdata',[DashboardController::class,'tambahdata'])->middleware('auth');
Route::get('/editdata',[DashboardController::class,'editdata'])->middleware('auth');

Route::get('/destroy/{id}',[DashboardController::class,'destroy'])->middleware('auth');

Route::get('/editdata/{id}',[DashboardController::class,'show']) ->middleware('auth');
Route::post('/editdata/{id}',[DashboardController::class,'update'])->name('eitdata')->middleware('auth');
Route::post('/tambahdata',[DashboardController::class,'store'])->middleware('auth');
