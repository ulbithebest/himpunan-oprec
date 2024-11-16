@extends('layouts.app')

@section('content')

<!-- component -->
<div class="grid bg-light mt-5 d-flex justify-content-center align-items-center vh-75">
    <!-- Left: Image -->
    <div class="w-50 h-75 g-cole-4 d-none d-lg-flex justify-content-center align-items-center">
        <img src="images/logo-himatif.png" alt="Placeholder Image" width="500" height="500"
        class="img-fluid me-2 border border-white rounded">
    </div>
    <!-- Right: Login Form -->
    <div class="p-lg-5 g-cole-4 p-md-4 p-3 w-50 me-5 w-lg-50">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">
                OPREC
                <span class="bg-danger text-white px-2 rounded">Hima</span> 
            </h2>
        </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            {{-- NPM --}}
            <div class="mb-3">
                <label for="npm" class="form-label text-secondary">{{ __('NPM') }}</label>
                <input id="npm" type="text" class="form-control @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" required>

                @error('npm')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- Username Input -->
            <div class="mb-3">
                <label for="username" class="form-label text-secondary">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- Password Input -->
            <div class="mb-3">
                <label for="password" class="form-label text-secondary" >Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>class="form-label text-secondary"
                @enderror
            </div>
            {{-- confirm password --}}
            <div class="mb-3">
                <label for="password-confirm" class="form-label text-secondary">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <!-- Login Button -->
            <button type="submit" class="btn btn-primary w-100">
                {{ __('Register') }}
            </button>
        </form>
        <!-- Sign up Link -->
        <div class="mt-2 text-primary text-center">
            <a href="{{route('login')}}" class="text-decoration-none">Sign in Here</a>
        </div>
    </div>
</div>
@endsection
