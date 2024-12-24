<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
    
        // Simulasi validasi
        if ($email === 'ana@gmail.com' && $password === '12345678') {

            $request->session()->put('user', [
                'email' => $email,
                'name' => 'Ni Putu Merta Bhuana',
                'photo' => 'images/profile.jpeg'
            ]);
            return redirect()->route('home');
        }
    
        return redirect()->route('login.form')->with('error', 'Email atau password salah.');
    }
    

    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        
        return redirect()->route('login.form');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('home');
    }
}
