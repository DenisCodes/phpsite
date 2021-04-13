<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div class="min-h-0 bg-gray-100">
    <div class="relative flex items-top justify-center min-h-0 bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
                <a href="{{ route('public_pages_index') }}" class="text-sm text-gray-700 underline">Pages</a>
                <a href="{{ route('public_posts_index') }}" class="text-sm text-gray-700 underline">Posts</a>
                <a href="{{ route('home') }}" class="text-sm text-gray-700 underline">Home</a>
                @foreach ($public_pages as $page)
                    <a class="hover:underline" href="{{route('public_pages_show', $page->id)}}">{{$page->title}}</a>
                @endforeach
            </div>
        @endif        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
    </div>
</div>
<div class="container mx-auto">
    {{ $slot }}
</div>
<footer>
    {{ $copyright }}
</footer>
</body>
</html>
