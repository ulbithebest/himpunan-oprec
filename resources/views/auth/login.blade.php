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

        <form action="{{ route('login') }}" method="POST">
            @csrf
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
                <label for="password" class="form-label text-secondary">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- Remember Me Checkbox -->
            <div class="mb-3 form-check">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
            <!-- Forgot Password Link -->
            <div class="mb-3 text-primary">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <!-- Login Button -->
            <button type="submit" class="btn btn-primary w-100">
                {{ __('Login') }}
            </button>
        </form>
        <!-- Sign up Link -->
        <div class="mt-2 text-primary text-center">
            <a href="{{route('register')}}" class="text-decoration-none">Sign up Here</a>
        </div>
    </div>
</div>

@endsection
