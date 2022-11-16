<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\MensagemController;
use App\Http\Controllers\API\TopicoController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post("/mensagem", [AuthController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::put('\user', [UserController::class, 'update']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::resource("topico", TopicoController::class);
    Route::resource("mensagem", MensagemController::class)->except("index");
});