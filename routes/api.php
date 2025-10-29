<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;

// route default bawaan laravel
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/pesanan', [PesananController::class, 'index']);      // Read all (pesanan user login)
    Route::post('/pesanan', [PesananController::class, 'store']);     // Create
    Route::get('/pesanan/{id}', [PesananController::class, 'show']);  // Read detail
    Route::put('/pesanan/{id}', [PesananController::class, 'update']); // Update
    Route::delete('/pesanan/{id}', [PesananController::class, 'destroy']); // Delete
});