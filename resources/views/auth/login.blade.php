@extends('layouts.app')

@section('content')
<div class="container-fluid bg-light vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-100 justify-content-center align-items-center">
        <!-- Left: Image -->
        <div class="col-lg-6 col-md-6 d-none d-md-flex justify-content-center align-items-center">
            <img src="images/logo-himatif.png" alt="Logo Hima" class="img-fluid border border-white rounded shadow-sm" style="max-width: 80%; height: auto;">
        </div>

        <!-- Right: Login Form -->
        <div class="col-lg-6 col-md-6 col-sm-12 p-4">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-primary">
                    OPREC 
                    <span class="bg-danger text-white px-2 rounded">Hima</span>
                </h2>
            </div>

            <form action="{{ route('login') }}" method="POST" class="shadow-sm p-4 bg-white rounded">
                @csrf

                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label text-secondary">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="form-label text-secondary">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                           name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                           {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label text-secondary" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <!-- Forgot Password -->
                <div class="mb-3 text-start">
                    @if (Route::has('password.request'))
                    <a class="text-decoration-none text-primary" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn btn-primary w-100">
                    {{ __('Login') }}
                </button>
            </form>

            <!-- Sign Up Link -->
            <div class="mt-3 text-center">
                <a href="{{ route('register') }}" class="text-decoration-none text-primary">Sign up Here</a>
            </div>
        </div>
    </div>
</div>
@endsection
