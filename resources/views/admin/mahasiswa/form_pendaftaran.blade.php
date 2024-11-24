@extends('admin.partials.layout')
@section('content')
    <div class="w-full md:w-3/6 mx-auto pl-0 md:pl-60 p-6 bg-white mt-16 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Formulir Pendaftaran</h2>

        <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Input User ID (Hidden) -->
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

            <!-- Nama Lengkap -->
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none bg-gray-200 text-gray-700 cursor-not-allowed" value="{{ auth()->user()->name }}" disabled>
            </div>

            <!-- NIM -->
            <div class="mb-4">
                <label for="nim" class="block text-gray-700 font-medium mb-2">NIM</label>
                <input type="text" name="nim" id="nim" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none bg-gray-200 text-gray-700 cursor-not-allowed" value="{{ auth()->user()->npm }}" disabled>
            </div>

            <!-- No. Telepon -->
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-medium mb-2">No. Telepon</label>
                <input type="text" name="phone" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none bg-gray-200 text-gray-700 cursor-not-allowed" value="{{ auth()->user()->phone }}" disabled>
            </div>

            <!-- Jurusan -->
            <div class="mb-4">
                <label for="jurusan" class="block text-gray-700 font-medium mb-2">Jurusan</label>
                <select name="jurusan" id="jurusan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                    <option value="" disabled selected>Pilih Jurusan</option>
                    <optgroup label="D4 Teknik Informatika">
                        <option value="D4 Teknik Informatika 1A">D4 Teknik Informatika 1A</option>
                        <option value="D4 Teknik Informatika 1B">D4 Teknik Informatika 1B</option>
                        <option value="D4 Teknik Informatika 1C">D4 Teknik Informatika 1C</option>
                        <option value="D4 Teknik Informatika 2A">D4 Teknik Informatika 2A</option>
                        <option value="D4 Teknik Informatika 2B">D4 Teknik Informatika 2B</option>
                    </optgroup>
                    <optgroup label="D3 Teknik Informatika">
                        <option value="D3 Teknik Informatika 1A">D3 Teknik Informatika 1A</option>
                        <option value="D3 Teknik Informatika 2A">D3 Teknik Informatika 2A</option>
                    </optgroup>
                </select>
            </div>

            <!-- Divisi -->
            <div class="mb-4">
                <label for="divisi" class="block text-gray-700 font-medium mb-2">Pilih Divisi</label>
                <select name="divisi" id="divisi" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                    <option value="" disabled selected>Pilih Divisi</option>
                    <option value="Divisi Inti">Divisi Inti</option>
                    <option value="Divisi Development Team">Divisi Development Team</option>
                    <option value="Divisi Event Organizer (EO)">Divisi Event Organizer (EO)</option>
                    <option value="Humas (Hubungan Masyarakat)">Humas (Hubungan Masyarakat)</option>
                </select>
            </div>

            <!-- Motivasi -->
            <div class="mb-4">
                <label for="motivasi" class="block text-gray-700 font-medium mb-2">Motivasi</label>
                <textarea name="motivasi" id="motivasi" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required></textarea>
            </div>

            <!-- Foto Diri -->
            <div class="mb-4">
                <label for="foto_diri" class="block text-gray-700 font-medium mb-2"> Foto Diri (Format: jpg, jpeg, png) </label>
                <input type="file" name="foto_diri" id="foto_diri" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" accept="image/jpeg,image/png" required>
            </div>

            <!-- CV dan Sertifikat -->
            <div class="mb-4">
                <label for="cv_sertif" class="block text-gray-700 font-medium mb-2"> CV dan Sertifikat (Sertifikat opsional, tetapi CV wajib diunggah) </label>
                <input type="file" name="cv_sertif" id="cv_sertif" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" accept="application/pdf" required>
                <p class="text-sm text-gray-500 mt-1">Gabungkan CV dan sertifikat menjadi satu file dalam format PDF.</p>
            </div>

            <!-- Tombol Kirim -->
            <button type="submit" class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                Kirim Pendaftaran
            </button>
        </form>
    </div>
@endsection
