<?php

use Illuminate\Support\Facades\Route;



Route::group(['static'], function (){
    Route::get('/register',[\App\Http\Controllers\Authcontroller::class,'register'])->name('register');
    Route::post('/register',[\App\Http\Controllers\Authcontroller::class,'register_post']);
    Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login');
    Route::post('/login',[\App\Http\Controllers\AuthController::class,'login_post']);
});

Route::middleware('auth')->group(function () {
    Route::get('/logout',[\App\Http\Controllers\Authcontroller::class,'logout'])->name('logout');
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/',[\App\Http\Controllers\MainController::class,'index'])->name('home');

Route::get('/contacts',[\App\Http\Controllers\MainController::class,'contacts']);

Route::resource('/news',\App\Http\Controllers\NewsController::class);
