<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function aksi_login(Request $request)
    {
            $request->validate([
                'username' => 'required|string',
                'password' => 'required|string',
            ]);
    
            $credentials = $request->only('username', 'password');
            if (Auth::attempt($credentials)) {
              
                return redirect()->intended('dashboard')->with('success', 'Login Berhasil');
            }
    
            return back()->withErrors([
                'username' => 'username atau password salah',
            ]);
        
    
    }

    public function logout()
    {
        {
            Auth::logout();
            return redirect('/login')->with('success', 'You have been logged out.');
        }
    }
    
}
