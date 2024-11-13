<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController; // Pastikan baris ini ada
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