<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware(['authenticate'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'master'], function () {
        Route::get('/customer', [CustomerController::class, 'index'])->name('master.customer');
        Route::get('/service', [ServiceController::class, 'index'])->name('master.service');
    });  
    
    Route::group(['prefix'=>'transaction'],function(){
        Route::get('/', [OrderController::class, 'index'])->name('order');
        Route::get('/print/{id}', [OrderController::class, 'print'])->name('order.print');
    });
});

