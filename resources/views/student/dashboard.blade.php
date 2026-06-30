@extends('layouts.app')

@section('content')
<div class="space-y-8">
    <div class="rounded-[28px] border border-white/10 bg-slate-900/70 p-6 shadow-2xl shadow-black/20 backdrop-blur">
        <p class="text-sm uppercase tracking-[0.2em] text-slate-400">Browse Books</p>
        <h1 class="mt-2 text-3xl font-semibold text-white">Available Books</h1>
        <p class="mt-2 text-sm text-slate-400">A polished frontend preview for your campus library experience.</p>
    </div>

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        @foreach([["Atomic Habits","James Clear","Self-Improvement","4"],["The Hobbit","J.R.R. Tolkien","Fantasy","2"],["Clean Code","Robert C. Martin","Programming","6"],["Sapiens","Yuval Noah Harari","History","3"]] as $book)
            <article class="rounded-[28px] border border-white/10 bg-slate-900/70 p-5 shadow-xl shadow-black/20 backdrop-blur">
                <div class="flex h-40 items-center justify-center rounded-3xl bg-gradient-to-br from-blue-500/20 to-slate-800 text-3xl font-bold text-slate-100">
                    {{ strtoupper(substr($book[0], 0, 1)) }}
                </div>
                <div class="mt-5 space-y-3">
                    <div class="flex items-start justify-between gap-3">
                        <div>
                            <h2 class="text-xl font-semibold text-white">{{ $book[0] }}</h2>
                            <p class="mt-1 text-sm text-slate-400">{{ $book[1] }}</p>
                        </div>
                        <span class="rounded-full bg-amber-500/10 px-3 py-1 text-xs font-semibold text-amber-300">{{ $book[2] }}</span>
                    </div>
                    <p class="text-sm font-medium text-emerald-400">{{ $book[3] }} copies available</p>
                    <button type="button" class="inline-flex w-full justify-center rounded-2xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-blue-700">
                        Borrow
                    </button>
                </div>
            </article>
        @endforeach
    </div>
</div>
@endsection