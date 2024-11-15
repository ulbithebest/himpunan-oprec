@extends('layouts.app')

@section('title', 'Divisi')

@section('content')
<div class="container py-5">
    <h1 class="my-4 text-center text-primary font-weight-bold">Divisi Himpunan Mahasiswa Informatika</h1>

    <div class="row">
        <!-- Divisi Pengembangan -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-lg h-100">
                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Divisi Pengembangan">
                <div class="card-body">
                    <h5 class="card-title text-center text-info font-weight-bold">Divisi Pengembangan</h5>
                    <p class="card-text text-center">Bertanggung jawab dalam pengembangan website, aplikasi, dan program lainnya.</p>
                    <a href="#" class="btn btn-outline-info d-block mx-auto">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>

        <!-- Divisi Humas -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-lg h-100">
                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Divisi Humas">
                <div class="card-body">
                    <h5 class="card-title text-center text-info font-weight-bold">Divisi Humas</h5>
                    <p class="card-text text-center">Menjalin hubungan dengan pihak eksternal dan mempublikasikan kegiatan himpunan.</p>
                    <a href="#" class="btn btn-outline-info d-block mx-auto">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>

        <!-- Divisi Keuangan -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded-lg h-100">
                <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Divisi Keuangan">
                <div class="card-body">
                    <h5 class="card-title text-center text-info font-weight-bold">Divisi Keuangan</h5>
                    <p class="card-text text-center">Mengelola dana dan keuangan himpunan secara transparan dan akuntabel.</p>
                    <a href="#" class="btn btn-outline-info d-block mx-auto">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
