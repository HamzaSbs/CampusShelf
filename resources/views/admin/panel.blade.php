@extends('layouts.app')

@section('content')
<div class="space-y-8">
    <div class="rounded-[32px] border border-white/10 bg-slate-900/70 p-8 shadow-2xl shadow-black/20 backdrop-blur">
        <p class="text-sm uppercase tracking-[0.3em] text-emerald-300">Admin Panel</p>
        <h1 class="mt-3 text-3xl font-semibold text-white sm:text-4xl">Library administration overview</h1>
        <p class="mt-4 max-w-2xl text-lg text-slate-400">A simple control center for monitoring books, requests, and student activity.</p>
    </div>

    <div class="grid gap-6 lg:grid-cols-3">
        <div class="rounded-[28px] border border-white/10 bg-slate-900/70 p-6 shadow-xl shadow-black/20 backdrop-blur">
            <div class="text-sm text-slate-400">Books in Stock</div>
            <div class="mt-3 text-3xl font-semibold text-white">128</div>
        </div>
        <div class="rounded-[28px] border border-white/10 bg-slate-900/70 p-6 shadow-xl shadow-black/20 backdrop-blur">
            <div class="text-sm text-slate-400">Pending Requests</div>
            <div class="mt-3 text-3xl font-semibold text-white">14</div>
        </div>
        <div class="rounded-[28px] border border-white/10 bg-slate-900/70 p-6 shadow-xl shadow-black/20 backdrop-blur">
            <div class="text-sm text-slate-400">Active Students</div>
            <div class="mt-3 text-3xl font-semibold text-white">86</div>
        </div>
    </div>

    <div class="overflow-hidden rounded-[32px] border border-white/10 bg-slate-900/70 shadow-2xl shadow-black/20 backdrop-blur">
        <div class="border-b border-white/10 px-6 py-4">
            <h2 class="text-xl font-semibold text-white">Recent Activity</h2>
        </div>
        <div class="divide-y divide-white/10">
            <div class="flex items-center justify-between px-6 py-4 text-sm text-slate-300">
                <span>Student borrowed Atomic Habits</span>
                <span class="text-slate-400">10 min ago</span>
            </div>
            <div class="flex items-center justify-between px-6 py-4 text-sm text-slate-300">
                <span>New request for Clean Code</span>
                <span class="text-slate-400">25 min ago</span>
            </div>
            <div class="flex items-center justify-between px-6 py-4 text-sm text-slate-300">
                <span>Inventory updated for 3 books</span>
                <span class="text-slate-400">1 hour ago</span>
            </div>
        </div>
    </div>
</div>
@endsection
