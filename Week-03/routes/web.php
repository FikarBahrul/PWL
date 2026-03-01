<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;

Route::get('/', [HomeController::class, 'index']);

// Halaman Products
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'category'])
        ->defaults('category', 'food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'category'])
        ->defaults('category', 'beauty-health');
    Route::get('/home-care', [ProductController::class, 'category'])
        ->defaults('category', 'home-care');
    Route::get('/baby-kid', [ProductController::class, 'category'])
        ->defaults('category', 'baby-kid');
});

// Halaman User
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Halaman Penjualan
Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::post('/penjualan', [PenjualanController::class, 'proses']);