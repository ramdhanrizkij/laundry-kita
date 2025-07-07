<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'master'], function () {
    Route::get('/customer', [CustomerController::class, 'index'])->name('master.customer');
    Route::post('/customer/store',[CustomerController::class, 'store'])->name('customer.store');
    Route::get('/service', [ServiceController::class, 'index'])->name('master.service');
});
