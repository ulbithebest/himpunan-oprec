<!-- resources/views/tentang.blade.php -->
@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="container mt-5 pt-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Tentang Kami</h2>
        <p class="text-muted">Kenali lebih dekat Himpunan Mahasiswa Informatika</p>
    </div>

    <!-- Visi, Misi, dan Nilai -->
    <div class="row align-items-center">
        <div class="col-md-6">
            <h3 class="fw-bold">Visi Kami</h3>
            <p>Menciptakan komunitas mahasiswa informatika yang inovatif, berintegritas, dan memiliki semangat untuk belajar bersama demi mencapai kesuksesan bersama.</p>

            <h3 class="fw-bold">Misi Kami</h3>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-primary"></i> Mendukung pengembangan keterampilan teknis dan kepemimpinan.</li>
                <li><i class="bi bi-check-circle-fill text-primary"></i> Mendorong partisipasi dalam kegiatan ilmiah dan sosial.</li>
                <li><i class="bi bi-check-circle-fill text-primary"></i> Menyediakan platform untuk berbagi pengetahuan dan kolaborasi.</li>
            </ul>
        </div>
        <div class="col-md-6 text-center">
            <img src="https://via.placeholder.com/400x300" alt="Tentang Kami" class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Nilai-Nilai Inti -->
    <div class="mt-5">
        <h3 class="fw-bold text-center mb-4">Nilai-Nilai Kami</h3>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="p-4 rounded shadow-sm bg-light">
                    <i class="bi bi-heart-fill text-danger fs-1"></i>
                    <h5 class="mt-3">Komitmen</h5>
                    <p>Selalu berkomitmen untuk mendukung setiap anggota dalam mencapai tujuan bersama.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded shadow-sm bg-light">
                    <i class="bi bi-lightbulb-fill text-warning fs-1"></i>
                    <h5 class="mt-3">Inovasi</h5>
                    <p>Mendorong kreativitas dan inovasi di bidang informatika.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 rounded shadow-sm bg-light">
                    <i class="bi bi-people-fill text-primary fs-1"></i>
                    <h5 class="mt-3">Kolaborasi</h5>
                    <p>Membangun hubungan yang kuat dengan sesama anggota dan mitra eksternal.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
