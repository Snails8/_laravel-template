<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\SampleController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout',[LoginController::class, 'logout'])->name('logout');

Route::middleware('auth:admin')->group(function() {
    Route::get('/home', [SampleController::class, 'home']);
});