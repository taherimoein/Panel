@extends('layouts.main')

@section('title', '- Change Password')

@section('content')
<div class="bg-slate-200">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-lg font-semibold">Panel</h1>
                </div>
                <div>
                    <a href="{{ route('home') }}">Home</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex items-center justify-center h-screen">
        <div class="max-w-md w-full p-8 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-8 text-center">{{ __('Change Password') }}</h2>
            <form method="POST" action="{{ route('change-password') }}">
                @csrf

                @if(session('error') != '')
                    <div class="mb-4 p-2 shadow-md shadow-gray-400 rounded-md bg-red-300">
                        <p class="text-center">{{ session('error') }}</p>
                    </div>
                @endif

                <div class="mb-4">
                    <label for="old_password" class="block text-sm font-semibold mb-2">{{ __('Old Password') }}</label>
                    <input id="old_password" type="password"
                        class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:outline-none @error('old_password') border-red-500 @enderror"
                        name="old_password" required autofocus>
                    @error('old_password')
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
                    <label for="repeat_password" class="block text-sm font-semibold mb-2">{{ __('Repeat Password') }}</label>
                    <input id="repeat_password" type="password"
                        class="w-full px-4 py-3 rounded-lg border focus:border-blue-500 focus:outline-none @error('repeat_password') border-red-500 @enderror" name="repeat_password" required>
                    @error('repeat_password')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline">{{
                        __('Change Password') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection