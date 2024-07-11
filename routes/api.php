<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\MessageController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/message',[MessageController::class, 'create']);
Route::get('/hello', [ApiController::class, 'sayHello']);
Route::post('/echo', [ApiController::class, 'echoMessage']);


