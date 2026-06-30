@extends('layouts.app')

@section('content')
<div class="space-y-8">
    <div class="rounded-[32px] border border-white/10 bg-slate-900/70 p-8 shadow-2xl shadow-black/20 backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-blue-300">CampusShelf</p>
        <h1 class="mt-3 text-4xl font-semibold text-white sm:text-5xl">Welcome to your modern campus library.</h1>
        <p class="mt-4 max-w-2xl text-lg text-slate-400">Browse books, manage rentals, and keep the library running smoothly from a single polished experience.</p>
        <div class="mt-6 flex flex-wrap gap-3">
            <a href="{{ url('/dashboard') }}" class="rounded-2xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">Open Student Dashboard</a>
            <a href="{{ url('/admin') }}" class="rounded-2xl border border-white/10 bg-slate-800/70 px-5 py-3 text-sm font-semibold text-slate-200 transition hover:bg-slate-800">Go to Admin Panel</a>
        </div>
    </div>

    <div class="grid gap-6 lg:grid-cols-3">
        <div class="rounded-[28px] border border-white/10 bg-slate-900/70 p-6 shadow-xl shadow-black/20 backdrop-blur">
            <h2 class="text-xl font-semibold text-white">For Students</h2>
            <p class="mt-2 text-sm text-slate-400">Discover available books, borrow quickly, and track your active rentals from one dashboard.</p>
        </div>
        <div class="rounded-[28px] border border-white/10 bg-slate-900/70 p-6 shadow-xl shadow-black/20 backdrop-blur">
            <h2 class="text-xl font-semibold text-white">For Admins</h2>
            <p class="mt-2 text-sm text-slate-400">Monitor library activity, review requests, and manage inventory with a dedicated control panel.</p>
        </div>
        <div class="rounded-[28px] border border-white/10 bg-slate-900/70 p-6 shadow-xl shadow-black/20 backdrop-blur">
            <h2 class="text-xl font-semibold text-white">Fast and Simple</h2>
            <p class="mt-2 text-sm text-slate-400">A clean frontend experience built for quick navigation and a smooth campus library workflow.</p>
        </div>
    </div>
</div>
@endsection
