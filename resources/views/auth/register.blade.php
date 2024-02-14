@extends('layouts.main')

@section('title', '- Register')

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
                    <a href="{{ route('login') }}">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-md ">
            <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 mt-4">
                <div class="mb-4">
                    <h2 class="text-xl font-bold">{{ __('Register') }}</h2>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold mb-2">{{ __('First Name')
                                }}</label>
                            <input id="first_name" type="text"
                                class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:outline-none @error('first_name') border-red-500 @enderror"
                                name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name"
                                autofocus>
                            @error('first_name')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="last_name" class="block text-sm font-semibold mb-2">{{ __('Last Name')
                                }}</label>
                            <input id="last_name" type="text"
                                class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:outline-none @error('last_name') border-red-500 @enderror"
                                name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
                            @error('last_name')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <div>
                            <label for="username" class="block text-sm font-semibold mb-2">{{ __('Username') }}</label>
                            <input id="username" type="text"
                                class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:outline-none @error('username') border-red-500 @enderror"
                                name="username" value="{{ old('username') }}" required autocomplete="username"
                                autofocus>
                            @error('username')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold mb-2">{{ __('Email') }}</label>
                            <input id="email" type="email"
                                class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:outline-none @error('email') border-red-500 @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="block text-sm font-semibold mb-2">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:outline-none @error('password') border-red-500 @enderror"
                                name="password" required autocomplete="new-password">
                            @error('password')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password-confirm" class="block text-sm font-semibold mb-2">{{ __('Confirm
                                Password') }}</label>
                            <input id="password-confirm" type="password"
                                class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:outline-none"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="mb-4">
                        <button type="submit"
                            class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline">{{
                            __('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection