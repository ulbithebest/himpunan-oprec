@extends('layouts.app')

@section('content')

<!-- Component -->
<div class="grid bg-light mt-5 d-flex justify-content-center align-items-center vh-75">
    <!-- Left: Image -->
    <div class="w-50 h-75 d-none d-lg-flex justify-content-center align-items-center">
        <img src="images/logo-himatif.png" alt="Logo Himatif" width="500" height="500" class="img-fluid me-2 border border-white rounded">
    </div>
    <!-- Right: Register Form -->
    <div class="p-lg-5 p-md-4 p-3 w-50 me-5 w-lg-50">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">
                OPREC
                <span class="bg-danger text-white px-2 rounded">Hima</span>
            </h2>
        </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <!-- NPM -->
            <div class="mb-3">
                <label for="npm" class="form-label text-secondary">{{ __('NPM') }}</label>
                <input id="npm" type="text" class="form-control @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" required>

                @error('npm')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Nama -->
            <div class="mb-3">
                <label for="name" class="form-label text-secondary">{{ __('Nama') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label text-secondary">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label text-secondary">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password-confirm" class="form-label text-secondary">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <!-- Register Button -->
            <button type="submit" class="btn btn-primary w-100">
                {{ __('Register') }}
            </button>
        </form>

        <!-- Sign-in Link -->
        <div class="mt-2 text-primary text-center">
            <a href="{{ route('login') }}" class="text-decoration-none">Sign in Here</a>
        </div>
    </div>
</div>

@endsection
