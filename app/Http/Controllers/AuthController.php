<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\StoreImageTrait;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use StoreImageTrait;
    
    public function sign_up(Request $request)
    {
        if($request->isMethod('GET')){
            return view('pages.auth.register');
        } 
        
        $request->validate([
            'name' => 'required|string|unique:users',
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
        $user = Auth::user();
        if($request->isMethod('GET')){
            $profile = \App\Models\Profile::where('user_id', $user->id)->first();
            $data = [
                'user_name' => $user->name,
                'avator' => $user->avator,
                'profile' => $profile
            ];
            return view('pages.auth.profile', $data);
        }

        $request->validate([
            'name' => 'required|string',
            'about' => 'required|string',
            'phone' => 'required|string',
            'district' => 'required|string',
            'address' => 'required|string',
            'website' => 'nullable|url',
            'twitter' => 'nullable|url',
            'facebook' => 'nullable|url',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]); 
        
        if($user->name != $request->input('name')){
            $request->validate([
                'name' => 'unique:users',
            ]); 
            $user->name = $request->input('name');
        }

        if($request->has('avatar')){
            $image = $this->verifyAndStoreImage($request, 'profiles', 'avatar');
            if($image){
                $user->avator = $image;
            }
        }

        $data = $request->only(['about', 'phone', 'district', 'address', 'website', 'twitter', 'facebook']);
        $data = array_merge($data, ['user_id' => $user->id]);
        \App\Models\Profile::updateOrCreate(
            ['user_id' => $user->id],
            $data
        );

        $user->save();
        return redirect()->back()->with('success', 'Profile information has been updated');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
