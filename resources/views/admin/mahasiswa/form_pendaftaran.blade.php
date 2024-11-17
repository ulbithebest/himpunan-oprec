@extends('admin.partials.layout')
@section('content')
    <div class="w-full mx-auto p-6 bg-white mt-16 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Formulir Pendaftaran</h2>
        
        <form action="{{ route('submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>
            
            <div class="mb-4">
                <label for="nim" class="block text-gray-700 font-medium mb-2">NIM</label>
                <input type="text" name="nim" id="nim" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>
            
            <div class="mb-4">
                <label for="jurusan" class="block text-gray-700 font-medium mb-2">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>
            
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
            </div>
            
            <div class="mb-4">
                <label for="divisi" class="block text-gray-700 font-medium mb-2">Pilih Divisi</label>
                <select name="divisi" id="divisi" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                    <option value="" disabled selected>Pilih Divisi</option>
                    <option value="Pengembangan">Pengembangan</option>
                    <option value="Keuangan">Keuangan</option>
                    <option value="Humas">Humas</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label for="motivasi" class="block text-gray-700 font-medium mb-2">Motivasi (Opsional)</label>
                <textarea name="motivasi" id="motivasi" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>
            
            <button type="submit" class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-600 transition">Kirim Pendaftaran</button>
        </form>
    </div>
@endsection