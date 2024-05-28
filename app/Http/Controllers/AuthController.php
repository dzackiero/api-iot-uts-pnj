<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(UserLoginRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();
        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            return $this->errorResponse(statusCode: 401, message: "Invalid Credentials");
        }
        $token = $user->createToken($user->name . '-AuthToken')->plainTextToken;
        return $this->successResponse([
            'access_token' => $token,
        ]);
    }

    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth()->user()->tokens()->delete();
        return $this->successResponse(message: 'Logged out successfully');
    }
}
