<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

//Route::middleware('auth:admin')->group(function() {
//    Route::get()
//});