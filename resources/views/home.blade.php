@extends('layouts.main')

@section('title', '- Home')

@section('content')
<div class="bg-slate-200">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-lg font-semibold">Panel</h1>
                </div>
                <div class="pl-2 relative" id="userMenu">
                    @auth
                        <div id="menu">
                            <span class="pr-2 text-gray-600">{{ Auth::user()->get_fullname() }}</span>
                            <span class="cursor-pointer pr2" id="userMenuIcon">&#9776;</span>
                        </div>
                        <div class="hidden bg-white absolute shadow-md z-10 mt-4 shadow-gray-400" id="userMenuDropdown">
                            <a href="{{ route('change-password') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Change Password</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="flex items-center justify-center h-screen">
        <div class="w-full md:w-8/12 lg:w-6/12 xl:w-4/12">
            <div class="shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4 mt-4 bg-white">
                <div class="mb-4">
                    <h2 class="text-xl font-bold">{{ __('Home') }}</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="bg-green-500 text-white rounded-lg p-4 mb-4" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var menu = document.getElementById('menu');
        var userMenuDropdown = document.getElementById('userMenuDropdown');
        
        menu.addEventListener('click', function() {
            userMenuDropdown.classList.toggle('hidden');
        });
    });
</script>
@endsection
