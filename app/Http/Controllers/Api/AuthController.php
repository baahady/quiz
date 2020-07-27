<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');

        $token = auth('api')->attempt($credentials);

        if(!$token){
            return response()->json(['message' => 'Invalid email or password'],403);
        }

        return response()->json([
            'message' => 'logged in',
            'token' => $token
        ]);
    }
}
