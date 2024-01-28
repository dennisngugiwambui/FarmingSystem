<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Exception;
use Illuminate\Support\Facades\Log;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $credentials = $request->only(['phone', 'password']);


            if (!$token = Auth::attempt($credentials)) {
                return response()->json([
                    'success' => false
                ]);
            }


            // Generate an expiration time for the token (e.g., 1 hour)
            $expiration = now()->addHours(1)->timestamp;


            return response()->json([
                'success' => true,
                'token' => $token,
                'expires_at' => $expiration,
                'user' => Auth::user(),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'invalid credentials',
            ]);
        }
    }


    public function register(Request $request)
    {
        try {
            $encryptedPassword = Hash::make($request->password);

            $user = new User;
            $user->username = $request->username;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = $encryptedPassword;
            $user->status='unverified';
            //$user->save();

            dd($user);

            // After registration, log in the user
            Auth::login($user);

            return response()->json([
                'success' => true,
                'message' => 'User registered and logged in successfully',
                'user' => $user,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while registering: ' . $e->getMessage(),
            ]);
        }
    }


    public function logout(Request $request)
    {
        try {
            // Invalidate the token instead of parsing it
            Auth::logout();

            return response()->json(['success' => true]);
        } catch (Exception $e) {
            Log::error('Error invalidating token: ' . $e->getMessage());
            return response()->json(['error' => 'Could not parse token']);
        }
    }
}



