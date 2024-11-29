<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;


class AuthController extends Controller
{
     // Show registration form
     public function showRegisterForm()
     {
         return view('front.pages.auth.register');
     }
 
     // Handle registration
     public function register(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => [
                 'required',
                 'confirmed',
                 Rules\Password::defaults()
             ],
         ]);
 
         $user = User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => Hash::make($request->password),
         ]);
 
         Auth::login($user);
 
         return redirect()->intended('login')->with('success', 'Registration successful');
     }
 
     // Show login form
     public function showLoginForm()
     {
         return view('front.pages.auth.login');
     }
 
     // Handle login
     public function login(Request $request)
     {
         $credentials = $request->validate([
             'email' => 'required|string|email',
             'password' => 'required|string',
         ]);
 
         if (Auth::attempt($credentials)) {
             $request->session()->regenerate();
 
             return redirect()->intended('/')->with('success', 'Logged in successfully');
         }
 
         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ]);
     }
 
     // Handle logout
     public function logout(Request $request)
     {
         Auth::logout();
 
         $request->session()->invalidate();
         $request->session()->regenerateToken();
 
         return redirect('/')->with('success', 'Logged out successfully');
     }
}
