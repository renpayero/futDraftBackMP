<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PedidoController;

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', function(Request $request){
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);

    //almacenar ordenes
    Route::apiResource('/pedidos', PedidoController::class);
});

Route::middleware(['auth:sanctum', 'admin'])->group(function() {
    Route::get('/admin', function() {
        return response()->json(['message' => 'Acceso autorizado para administradores']);
    });
    Route::apiResource('/admin/productos', ProductoController::class);
});

Route::apiResource('/categorias', CategoriaController::class );
Route::apiResource('/productos', ProductoController::class );

//Authenticacion
Route::post('/registro', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);