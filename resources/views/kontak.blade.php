<!-- resources/views/kontak.blade.php -->
@extends('layouts.app_navbar')

@section('title', 'Kontak Kami')

@section('content')
<div class="container mt-3 pt-3"> <!-- Mengurangi margin dan padding atas -->
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">Kontak Kami</h2>
        <p class="text-muted">Hubungi kami untuk pertanyaan atau informasi lebih lanjut</p>
    </div>

    <!-- Informasi Kontak -->
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h4 class="fw-bold">Informasi Kontak</h4>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-envelope-fill text-primary"></i> Email: <a href="mailto:info@informatika.org">info@informatika.org</a></li>
                        <li><i class="bi bi-telephone-fill text-primary"></i> Telepon: +62 856-2448-2521</li>
                        <li><i class="bi bi-geo-alt-fill text-primary"></i> Alamat: Kampus ULBI, Jalan Pendidikan No. 10, Kota</li>
                    </ul>
                </div>
            </div>

            <!-- Ikon Media Sosial -->
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="fw-bold">Ikuti Kami</h5>
                    <div class="d-flex">
                        <a href="#" class="me-3"><i class="bi bi-facebook fs-4 text-primary"></i></a>
                        <a href="#" class="me-3"><i class="bi bi-twitter fs-4 text-info"></i></a>
                        <a href="https://www.instagram.com/himatif.ulbi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="bi bi-instagram fs-4 text-danger"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Peta Lokasi -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h4 class="fw-bold">Lokasi Kami</h4>
                    <!-- You can replace the iframe link with your actual location -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1339490105797!2d107.5731248736712!3d-6.8745499931242335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d1b68bb875%3A0xd8fcf5a9e43bd6e4!2sUniversitas%20Logistik%20dan%20Bisnis%20Internasional%20(ULBI)!5e0!3m2!1sid!2sid!4v1732452083424!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
