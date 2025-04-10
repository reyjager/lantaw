<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function showlogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard');
        } else {
            // dd("incorrect password");
            return redirect()->route('login')->with('error', 'Email or  Password is incorrect');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showregister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']); // Hash password

        // Create user
        $user = User::create($validatedData);

        // Log in user automatically
        Auth::login($user);

        // Store user name in session
        session(['username' => Auth::user()->name]);

        // Redirect to dashboard
        return redirect()->intended('dashboard');
    }
    public function islogUser()
    {
        return (Auth::check())
            ? redirect()->route('dashboard')
            : redirect()->route('login');
    }
}
