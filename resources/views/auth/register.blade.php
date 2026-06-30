@extends('layouts.app')

@section('content')
<div class="flex min-h-[calc(100vh-160px)] items-center justify-center">
    <div class="w-full max-w-lg rounded-[32px] border border-slate-200 bg-white p-8 shadow-lg">
        <h1 class="text-2xl font-semibold text-slate-900">Create Student Account</h1>
        <p class="mt-2 text-sm text-slate-500">Only @stud.kuet.ac.bd emails are allowed</p>

        <form method="POST" action="{{ route('register') }}" class="mt-8 space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-slate-700">Name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100" />
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-slate-700">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="yourroll@stud.kuet.ac.bd" required autocomplete="username" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100" />
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="student_id" class="block text-sm font-medium text-slate-700">Student ID (Roll Number)</label>
                <input id="student_id" name="student_id" type="text" value="{{ old('student_id') }}" required class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100" />
                @error('student_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="phone" class="block text-sm font-medium text-slate-700">Phone</label>
                <input id="phone" name="phone" type="text" value="{{ old('phone') }}" required class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100" />
                @error('phone')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                <input id="password" name="password" type="password" required autocomplete="new-password" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100" />
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-slate-700">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" class="mt-2 w-full rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-900 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100" />
                @error('password_confirmation')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="inline-flex w-full justify-center rounded-2xl bg-indigo-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Register</button>
        </form>

        <p class="mt-6 text-center text-sm text-slate-500">Already have an account? <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-700">Login</a></p>
    </div>
</div>
@endsection
