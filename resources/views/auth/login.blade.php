@extends('layouts.app')

@section('content')
<div class="flex min-h-[calc(100vh-160px)] items-center justify-center">
    <div class="w-full max-w-md rounded-[32px] border border-slate-200 bg-white p-8 shadow-lg">
        <h1 class="text-2xl font-semibold text-slate-900">Welcome Back</h1>
        <p class="mt-2 text-sm text-slate-500">Log in to browse textbooks and manage your rentals.</p>

        <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-5">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100" />
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                <input id="password" name="password" type="password" required autocomplete="current-password" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100" />
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between gap-3">
                <label class="inline-flex items-center text-sm text-slate-700">
                    <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                    <span class="ml-2">Remember Me</span>
                </label>
            </div>

            <button type="submit" class="inline-flex w-full justify-center rounded-2xl bg-indigo-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Login</button>
        </form>

        <p class="mt-6 text-center text-sm text-slate-500">Don't have an account? <a href="{{ route('register') }}" class="font-semibold text-indigo-600 hover:text-indigo-700">Register</a></p>
    </div>
</div>
@endsection
