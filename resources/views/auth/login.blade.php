@extends('layouts.main')

@section('title', '- Login')

@section('content')
<div class="bg-slate-200">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-lg font-semibold">Panel</h1>
                </div>
                <div>
                    @if (!auth()->check())
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <div class="flex items-center justify-center h-screen">
        <div class="max-w-md w-full p-8 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-8 text-center">{{ __('Login') }}</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="username" class="block text-sm font-semibold mb-2">{{ __('Username') }}</label>
                    <input id="username" type="text"
                        class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:outline-none @error('username') border-red-500 @enderror"
                        name="username" required autofocus>
                    @error('username')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-semibold mb-2">{{ __('Password') }}</label>
                    <input id="password" type="password"
                        class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:outline-none @error('password') border-red-500 @enderror"
                        name="password" required>
                    @error('password')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline">{{
                        __('Login') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection