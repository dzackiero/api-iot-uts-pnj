<?php

use Illuminate\Support\Facades\Route;

Route::post("login", [\App\Http\Controllers\AuthController::class, "login"])->name("login");

Route::group(["middleware" => "auth:sanctum"], function () {
    Route::post("me", [\App\Http\Controllers\AuthController::class, "me"])->name("me");
    Route::post("logout", [\App\Http\Controllers\AuthController::class, "logout"])->name("logout");

    // Resources
    Route::apiResource("transactions", \App\Http\Controllers\TransactionController::class);
    Route::apiResource("trashes", \App\Http\Controllers\TrashController::class);
    Route::apiResource("members", \App\Http\Controllers\MemberController::class);
});
