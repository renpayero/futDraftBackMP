<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/categorias', CategoriaController::class );
Route::apiResource('/productos', ProductoController::class );

//Authenticacion
Route::post('/registro', [AuthController::class, 'register']);