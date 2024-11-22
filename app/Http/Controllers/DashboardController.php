<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
{
    $user = Auth::user();
    return view('admin.dashboard.dashboard');
    
    // if ($user->role == 2) { // Role 2 untuk mahasiswa
    //     return view('admin.mahasiswa.form_pendaftaran'); // Render halaman mahasiswa
    // } elseif ($user->role == 1) { // Role 1 untuk admin
    //     return view('admin.dashboard.dashboard'); // Render halaman admin
    // } else {
    //     return view('guest.landing'); // Render halaman guest
    // }
}

    

}
