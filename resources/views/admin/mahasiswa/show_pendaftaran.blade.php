@extends('admin.partials.layout')
@section('content')
    <div class="w-3/6 mx-auto pl-60 p-6 bg-white mt-16 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Data Pendaftaran Anda</h2>

        <!-- Nama Lengkap -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Nama Lengkap:</label>
            <p class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100">{{ auth()->user()->name }}</p>
        </div>

        <!-- NIM -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">NIM:</label>
            <p class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100">{{ auth()->user()->npm }}</p>
        </div>

        <!-- Jurusan -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Jurusan:</label>
            <p class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100">{{ $pendaftaran->jurusan }}</p>
        </div>

        <!-- Divisi -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Divisi:</label>
            <p class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100">{{ $pendaftaran->divisi }}</p>
        </div>

        <!-- Motivasi -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Motivasi:</label>
            <p class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100">{{ $pendaftaran->motivasi }}</p>
        </div>

        <!-- Foto Diri -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Foto Diri:</label>
            <img src="{{ asset($pendaftaran->foto_diri) }}" alt="Foto Diri"
                 class="w-40 h-40 object-cover rounded border border-gray-300">
        </div>

        <!-- CV dan Sertifikat -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">CV dan Sertifikat:</label>
            <a href="{{ route('download.cv') }}" class="text-blue-500 underline">
                Klik di sini untuk mengunduh CV dan Sertifikat
            </a>
        </div>
    </div>
@endsection
