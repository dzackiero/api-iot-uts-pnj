<?php

use Illuminate\Support\Facades\Route;

Route::apiResource("transactions", \App\Http\Controllers\TransactionController::class);
Route::apiResource("trashes", \App\Http\Controllers\TransactionController::class);
Route::apiResource("members", \App\Http\Controllers\TransactionController::class);
