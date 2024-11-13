<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran; 

class PendaftaranController extends Controller
{
    public function submit(Request $request)
{
    // Validasi data
    $validated = $request->validate([
        'nama' => 'required',
        'nim' => 'required|unique:pendaftaran',
        'jurusan' => 'required',
        'email' => 'required|email',
        'divisi' => 'required',
        'motivasi' => 'nullable',
    ]);

    // Menyimpan data ke tabel 'pendaftaran'
    Pendaftaran::create($validated);

    return redirect()->route('konfirmasi');
}

}
