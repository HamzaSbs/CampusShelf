@extends('layouts.app')

@section('content')
<div class="space-y-8">
    <div class="rounded-[28px] border border-white/10 bg-slate-900/70 p-6 shadow-2xl shadow-black/20 backdrop-blur">
        <h1 class="text-3xl font-semibold text-white">My Rentals</h1>
        <p class="mt-2 text-sm text-slate-400">A clean frontend preview of your borrowed books and statuses.</p>
    </div>

    <div class="overflow-hidden rounded-[32px] border border-white/10 bg-slate-900/70 shadow-2xl shadow-black/20 backdrop-blur">
        <table class="min-w-full divide-y divide-white/10 text-sm">
            <thead class="bg-slate-800/80 text-slate-300">
                <tr>
                    <th class="px-4 py-4 text-left font-semibold">Book</th>
                    <th class="px-4 py-4 text-left font-semibold">Author</th>
                    <th class="px-4 py-4 text-left font-semibold">Due Date</th>
                    <th class="px-4 py-4 text-left font-semibold">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/10 bg-slate-900/70">
                @foreach([['Atomic Habits','James Clear','Jul 10, 2026','Borrowed'],['The Hobbit','J.R.R. Tolkien','Jul 18, 2026','Pending Pickup']] as $rental)
                    <tr class="hover:bg-slate-800/70">
                        <td class="px-4 py-4 font-medium text-white">{{ $rental[0] }}</td>
                        <td class="px-4 py-4 text-slate-400">{{ $rental[1] }}</td>
                        <td class="px-4 py-4 text-slate-400">{{ $rental[2] }}</td>
                        <td class="px-4 py-4">
                            <span class="inline-flex rounded-full px-3 py-1 text-xs font-semibold {{ $rental[3] === 'Borrowed' ? 'bg-emerald-500/10 text-emerald-300' : 'bg-amber-500/10 text-amber-300' }}">
                                {{ $rental[3] }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
