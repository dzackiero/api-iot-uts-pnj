<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function successResponse($data = null, string $message = "success"): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            "success" => true,
            "message" => $message,
            "data" => $data
        ]);
    }

    public function errorResponse($data = null, $statusCode = 500, $message = "Error"): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            "success" => false,
            "message" => $message,
            "data" => $data
        ], $statusCode);
    }
}
