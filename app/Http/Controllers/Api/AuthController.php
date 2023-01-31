<?php

namespace App\Http\Controllers\Api;

use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|unique:users',
            'password' => 'required|string|min:4',
            'account_type' => 'required'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'account_type' => $request->input('account_type'),
        ]);

        //todo: send verification email
        return $user;
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            'device_name' => 'required'
        ]);

        //authenticate user
        $user = User::where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        return $user->createToken($request->device_name)->plainTextToken;        
    }

    public function logout(Request $request)
    {
        auth('sanctum')->user()->tokens()->delete();
        return ['message' => 'user logged out'];
    }

    public function resetPassword(Request $request)
    {
        # code...
    }

    public function verifyEmail(Request $request)
    {
        # code...
    }

    public function updateProfile(Request $request)
    {
        # code...
    }

    public function userProfile(Request $request)
    {
        $user = auth('sanctum')->user();
        return $user;
    }
}
