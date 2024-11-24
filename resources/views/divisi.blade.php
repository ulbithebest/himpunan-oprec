@extends('layouts.app_navbar')

@section('title', 'Divisi')

@section('content')
<div class="container py-5">
    <!-- Heading -->
    <h1 class="text-center mb-5">
        <span class="hover-title">Divisi Himpunan Mahasiswa Informatika</span>
    </h1>

    <!-- Row with Divisions -->
    <div class="row g-4">
        <!-- Divisi Inti -->
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 shadow border-0 rounded-3 overflow-hidden">
                <img src="{{ asset('images/Inti.jpg') }}" alt="Divisi EO" class="card-img-top">
                <div class="card-body text-center">
                    <i class="bi bi-gear text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5 class="card-title font-weight-bold text-primary">Divisi Inti</h5>
                    <p class="card-text">Koordinasi dan pengambilan keputusan strategis untuk himpunan.</p>
                </div>
            </div>
        </div>

        <!-- Divisi EO -->
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 shadow border-0 rounded-3 overflow-hidden">
                <img src="{{ asset('images/eo.jpg') }}" alt="Divisi EO" class="card-img-top">
                <div class="card-body text-center">
                    <i class="bi bi-calendar-event text-danger mb-3" style="font-size: 3rem;"></i>
                    <h5 class="card-title font-weight-bold text-danger">Divisi EO</h5>
                    <p class="card-text">Mengelola acara seperti seminar, lomba, dan kegiatan internal.</p>
                </div>
            </div>
        </div>

        <!-- Divisi Humas -->
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 shadow border-0 rounded-3 overflow-hidden">
                <img src="{{ asset('images/humas.jpg') }}" alt="Divisi EO" class="card-img-top">
                <div class="card-body text-center">
                    <i class="bi bi-people text-info mb-3" style="font-size: 3rem;"></i>
                    <h5 class="card-title font-weight-bold text-info">Divisi Humas</h5>
                    <p class="card-text">Hubungan eksternal dan media untuk memperkenalkan himpunan.</p>
                </div>
            </div>
        </div>

        <!-- Divisi DevTeam -->
        <div class="col-lg-3 col-md-6">
            <div class="card h-100 shadow border-0 rounded-3 overflow-hidden">
                <img src="{{ asset('images/devteam.jpg') }}" alt="Divisi EO" class="card-img-top">
                <div class="card-body text-center">
                    <i class="bi bi-laptop text-success mb-3" style="font-size: 3rem;"></i>
                    <h5 class="card-title font-weight-bold text-success">Divisi DevTeam</h5>
                    <p class="card-text">Mengembangkan aplikasi, website, dan teknologi untuk himpunan.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
    .text-gradient {
        background: linear-gradient(90deg, #6a11cb, #2575fc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: bold;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    .card-body {
        padding: 2rem 1rem;
    }

    .card i {
        font-size: 3rem;
        transition: transform 0.3s ease;
    }

    .card:hover i {
        transform: scale(1.2);
    }

    .hover-title {
        font-family: 'Poppins', sans-serif;
        font-size: 2.5rem;
        font-weight: 600;
        text-align: center;
        color: #34495e;
        transition: transform 0.3s, color 0.3s;
    }

    .hover-title:hover {
        color: #e74c3c;
        transform: scale(1.1);
    }

    .card-img-top {
        height: 250px;
        object-fit: cover;
    }

    .card-body {
        background-color: #f8f9fa;
    }
</style>
@endsection
