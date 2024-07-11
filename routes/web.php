<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\ApiController;

Route::get('/home', [PortoController::class, 'home']);
Route::get('/porto1', [PortoController::class, 'porto1']);
Route::get('/porto2', [PortoController::class, 'porto2']);
Route::get('/porto3', [PortoController::class, 'porto3']);
