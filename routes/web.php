<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardController; // Pastikan baris ini ada
use App\Http\Controllers\AuthController; // Pastikan baris ini ada
use App\Models\Pendaftaran;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});
Route::get('/divisi', function () {
    return view('divisi');
});
Route::get('/form_pendaftaran', function () {
    return view('form_pendaftaran');
});

Route::get('/divisi', function () {
    return view('divisi');
})->name('divisi');

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});

// Route untuk menangani data pendaftaran yang dikirim
Route::post('/submit', [PendaftaranController::class, 'submit'])->name('submit');

Route::get('/konfirmasi', [PendaftaranController::class, 'submit'])->name('konfirmasi');

// // Halaman konfirmasi setelah pendaftaran
// Route::get('/konfirmasi', function () {
//     return view('konfirmasi'); // Halaman konfirmasi pendaftaran
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard');
});

// Pendaftaran
Route::get('pendaftaran', [PendaftaranController::class, 'index'])->name('form_pendaftaran.index');
Route::post('pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::get('/user', function () {
    return view('admin.user.users');
});

// Login Route
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
