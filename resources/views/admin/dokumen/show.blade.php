@extends('admin.partials.layout')

@section('content')
<div class="h-24 bg-gray-100"></div>
<div class="container w-full md:w-5/6 mx-auto pl-0 md:pl-60 px-4 py-8">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-blue-500 text-white py-4 px-6">
            <h1 class="text-2xl font-semibold">Detail Pendaftaran</h1>
        </div>

        <!-- Content -->
        <div class="p-6">
            <!-- Informasi Umum -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-2 text-gray-700">Informasi Umum</h2>
                <div class="grid grid-cols-2 gap-4">
                    <p><strong>Username:</strong> {{ $pendaftaran->user->email }}</p>
                    <p><strong>NPM:</strong> {{ $pendaftaran->user->npm }}</p>
                    <p><strong>Jurusan:</strong> {{ $pendaftaran->jurusan }}</p>
                    <p><strong>Calon Divisi:</strong> {{ $pendaftaran->divisi }}</p>
                </div>
            </div>

            <!-- Motivasi -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-2 text-gray-700">Motivasi</h2>
                <div class="bg-gray-100 p-4 rounded-lg text-gray-600">
                    {{ $pendaftaran->motivasi }}
                </div>
            </div>

            <!-- Dokumen -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-2 text-gray-700">Dokumen</h2>
                <div class="flex flex-col gap-4">
                    <a href="{{ asset($pendaftaran->cv_sertif) }}"
                       target="_blank"
                       class="bg-blue-500 text-white px-6 py-2 rounded-lg text-center font-medium hover:bg-blue-600 transition">
                        View CV dan Setifikat(opsional)
                    </a>
                    <a href="{{ asset($pendaftaran->foto_diri) }}"
                       target="_blank"
                       class="bg-green-500 text-white px-6 py-2 rounded-lg text-center font-medium hover:bg-green-600 transition">
                        View Photo
                    </a>
                </div>
            </div>

            <!-- Tombol Kembali -->
            <div class="flex justify-end">
                <a href="{{ route('admin.listPendaftaran') }}"
                   class="bg-gray-500 text-white px-6 py-2 rounded-lg font-medium hover:bg-gray-600 transition">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
