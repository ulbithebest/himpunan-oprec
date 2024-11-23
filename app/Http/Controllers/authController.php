<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function register(Request $request)
{
    // Validasi input
    $request->validate([
        'npm' => 'required|numeric|unique:users,npm',
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:8',
    ]);

    // Buat user baru
    \App\Models\User::create([
        'npm' => $request->npm,
        'name' => $request->nama,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => 'mahasiswa', // Set default role sebagai mahasiswa
    ]);

    // Login otomatis setelah registrasi
    Auth::attempt($request->only('email', 'password'));

    return redirect()->route('dashboard');
}


    
}
