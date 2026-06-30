<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'CampusShelf') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-950 font-sans text-slate-100 antialiased">
        <div class="relative min-h-screen overflow-hidden">
            <div class="pointer-events-none absolute inset-0">
                <div class="absolute -left-16 top-0 h-64 w-64 rounded-full bg-blue-600/10 blur-[150px]"></div>
                <div class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-blue-600/10 blur-[150px]"></div>
                <div class="absolute right-[-3rem] top-[-2rem] h-56 w-56 rounded-full bg-blue-600/10 blur-[150px]"></div>
                <div class="absolute bottom-[-2rem] left-[-3rem] h-60 w-60 rounded-full bg-blue-600/10 blur-[150px]"></div>
            </div>

            <header class="relative z-10 border-b border-white/10 bg-slate-950/70 backdrop-blur">
                <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                    <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-xl font-semibold text-white">
                        <span class="text-2xl">📚</span>
                        <span>CampusShelf</span>
                    </a>

                    <nav class="flex flex-wrap items-center gap-4 text-sm font-medium text-slate-300 sm:gap-6">
                        <a href="{{ url('/') }}" class="transition hover:text-white">Welcome</a>
                        <a href="{{ url('/dashboard') }}" class="transition hover:text-white">Student Dashboard</a>
                        <a href="{{ url('/student/rentals') }}" class="transition hover:text-white">My Rentals</a>
                        <a href="{{ url('/admin') }}" class="transition hover:text-white">Admin Panel</a>
                    </nav>
                </div>
            </header>

            <main class="relative z-10 mx-auto flex min-h-[calc(100vh-5rem)] max-w-7xl flex-col px-4 py-8 sm:px-6 lg:px-8">
                @hasSection('content')
                    @yield('content')
                @else
                    {{ $slot }}
                @endif
            </main>
        </div>
    </body>
</html>
