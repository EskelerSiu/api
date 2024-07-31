<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;

Route::apiResource('usuarios',UsuarioController::class);
Route::apiResource('productos',ProductoController::class);