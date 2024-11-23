<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Response;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::where('user_id', auth()->user()->id)->first();

        if ($pendaftaran) {
            return view('admin.mahasiswa.show_pendaftaran', compact('pendaftaran'));
        }

        return view('admin.mahasiswa.form_pendaftaran');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'jurusan' => 'required|string',
            'divisi' => 'required|string',
            'motivasi' => 'required|string',
            'foto_diri' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'cv_sertif' => 'required|file|mimes:pdf|max:5120',
        ]);

        // Ambil nama dan npm dari user terkait
        $user = auth()->user();
        $npm = $user->npm;
        $nama = str_replace(' ', '_', strtolower($user->name));

        // Format nama file
        $file_name_format = "{$npm}_{$nama}";

        // Simpan file foto diri ke public/uploads/foto_diri/
        $foto_diri_path = $request->file('foto_diri')->move(
            public_path('uploads/foto_diri'),
            "{$file_name_format}_foto." . $request->file('foto_diri')->getClientOriginalExtension()
        );

        // Simpan file CV dan Sertifikat ke public/uploads/cv_sertif/
        $cv_sertif_path = $request->file('cv_sertif')->move(
            public_path('uploads/cv_sertif'),
            "{$file_name_format}_cvsertif." . $request->file('cv_sertif')->getClientOriginalExtension()
        );

        // Simpan data ke database
        $pendaftaran = Pendaftaran::create([
            'user_id' => $request->user_id,
            'jurusan' => $request->jurusan,
            'divisi' => $request->divisi,
            'motivasi' => $request->motivasi,
            'foto_diri' => "uploads/foto_diri/" . basename($foto_diri_path),
            'cv_sertif' => "uploads/cv_sertif/" . basename($cv_sertif_path),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('form_pendaftaran.index')->with('success', 'Pendaftaran berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function downloadCv()
    {
        // Ambil user terkait
        $user = auth()->user();
        $pendaftaran = Pendaftaran::where('user_id', $user->id)->first();

        // Path file di server
        $filePath = public_path($pendaftaran->cv_sertif);

        // Nama file unduhan (NPM + Nama)
        $downloadName = "{$user->npm}_" . str_replace(' ', '_', strtolower($user->name)) . "_cvsertif.pdf";

        // Periksa apakah file ada
        if (file_exists($filePath)) {
            // Unduh file dengan nama yang diformat
            return Response::download($filePath, $downloadName);
        }

        // Jika file tidak ditemukan
        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }

    public function docsPendaftar()
    {
        // Ambil semua data pendaftaran dengan relasi user
        $pendaftaran = Pendaftaran::with('user')->get();

        // Kirim data ke view
        return view('admin.dokumen.docs', compact('pendaftaran'));
    }

    public function showPendaftar($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        return view('admin.dokumen.show', compact('pendaftaran'));
    }
}
