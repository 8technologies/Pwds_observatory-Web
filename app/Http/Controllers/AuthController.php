<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function sign_up(Request $request)
    {
        if($request->isMethod('GET')){
            return view('pages.auth.register');
        } 
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|same:password',
            'account_type' => 'required'
        ]); 
        
        \App\Models\User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'account_type' => $request->input('account_type'),
        ]); 
        
        return redirect()->route("login")->with('success', 'Account created, login to proceed');
    }

    public function login(Request $request)
    {
        if($request->isMethod('GET')){
            return view('pages.auth.login');
        }

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
 
        return back()->with([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        
    }

    public function profile(Request $request)
    {
        if($request->isMethod('GET')){
            $user = Auth::user();
            $data = ['user_name' => $user->name];
            return view('pages.auth.profile', $data);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
