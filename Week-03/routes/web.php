<?php
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

route ::get('/', function () {
    return view('welcome');
});

route ::get('/level', [LevelController::class, 'index']);
route ::get('/kategori', [KategoriController::class, 'index']);
route ::get('/user', [UserController::class, 'index']);