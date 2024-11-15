@extends('auth.layout')
@section('title', 'Register')
@section('content')

<div class="bg-gray-100 flex justify-center items-center h-screen">
    <!-- Left: Image -->
    <div class="w-1/2 h-screen flex-shrink-0 hidden lg:flex justify-center items-center">
        <img src="images/logo-himatif.png" alt="Placeholder Image"
            class="object-cover max-h-full border border-white rounded-md w-3/5">
    </div>
    <!-- Right: Login Form -->
    <div class="lg:p-20 md:p-16 sm:12 p-8 w-full lg:w-1/2 flex-grow">
        <h1 class="font-bold text-2xl text-center">REGISTER</h1>
        <br>
        <div class="text-center">
            <a href="https://www.instagram.com/himatif.ulbi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                <h2 class="font-bold text-3xl">
                    OpRec-
                    <span class="bg-[#f84525] text-white px-2 rounded-md">Hima</span>
                </h2>
            </a>
        </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Username Input -->
            <div class="mb-6">
                <label for="username" class="block text-gray-600">NPM</label>
                <input type="text" id="username" name="npm"
                    class="w-full lg:w-36 border border-gray-300 rounded-md py-3 px-4 focus:outline-none focus:border-blue-500"
                    autocomplete="off" placeholder="NPM">
            </div>
            {{-- Email input --}}
            <div class="mb-6">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="text" id="email" name="email"
                    class="w-full lg:w-36 border border-gray-300 rounded-md py-3 px-4 focus:outline-none focus:border-blue-500"
                    autocomplete="off" placeholder="example@email.com">
            </div>
            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full lg:w-36 border border-gray-300 rounded-md py-3 px-4 focus:outline-none focus:border-blue-500"
                    autocomplete="off" placeholder="Password">
            </div>
            <div class="mb-6">
                <label for="password-confirm" class="block text-gray-600">Confirm Password</label>
                <input type="password" id="password" name="password-confirm"
                    class="w-full lg:w-36 border border-gray-300 rounded-md py-3 px-4 focus:outline-none focus:border-blue-500"
                    autocomplete="off" placeholder="Confirm Password">
            </div>
            <!-- Register Button -->
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">Register</button>
        </form>
        <!-- Sign in Link -->
        <div class="mt-6 text-blue-500 text-center">
            <a href="{{route('login')}}" class="hover:underline">Sign in Here</a>
        </div>
    </div>
</div>