<!-- resources/views/kontak.blade.php -->
@extends('layouts.app_navbar')

@section('title', 'Kontak Kami')

@section('content')
<div class="container mt-5 pt-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Kontak Kami</h2>
        <p class="text-muted">Hubungi kami untuk pertanyaan atau informasi lebih lanjut</p>
    </div>

    <!-- Informasi Kontak -->
    <div class="row">
        <div class="col-md-6">
            <h4 class="fw-bold">Informasi Kontak</h4>
            <p><i class="bi bi-envelope-fill text-primary"></i> Email: <a href="mailto:info@informatika.org">info@informatika.org</a></p>
            <p><i class="bi bi-telephone-fill text-primary"></i> Telepon: +62 812-3456-7890</p>
            <p><i class="bi bi-geo-alt-fill text-primary"></i> Alamat: Kampus Informatika, Jalan Pendidikan No. 10, Kota</p>

            <!-- Ikon Media Sosial -->
            <div class="mt-4">
                <h5>Ikuti Kami</h5>
                <a href="#" class="me-3"><i class="bi bi-facebook fs-4 text-primary"></i></a>
                <a href="#" class="me-3"><i class="bi bi-twitter fs-4 text-info"></i></a>
                <a href="#"><i class="bi bi-instagram fs-4 text-danger"></i></a>
            </div>
        </div>

        <!-- Formulir Kontak -->
        <div class="col-md-6">
            <h4 class="fw-bold">Kirim Pesan</h4>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email Anda">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Tulis pesan Anda di sini"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Kirim</button>
            </form>
        </div>
    </div>
</div>
@endsection
