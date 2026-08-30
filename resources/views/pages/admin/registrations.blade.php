@extends('layouts.app')

@section('title', 'Workshop Registrations | Admin Portal')

@section('content')
<section class="py-10 bg-[#FAF6F0] min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex items-center justify-between mb-6">
            <a href="{{ route('admin.dashboard') }}" class="text-xs font-semibold text-[#54321A] hover:underline flex items-center gap-1">
                ← Back to Dashboard
            </a>
            <span class="text-xs text-stone-500">Total Enrollments: {{ $registrations->total() }}</span>
        </div>

        <div class="bg-white border border-[#E8DFD3] rounded-3xl p-6 sm:p-8 shadow-sm">
            <h2 class="font-serif text-2xl font-bold text-[#54321A] mb-6">Masterclass Registrations</h2>

            @if($registrations->isEmpty())
                <div class="text-center py-12 text-stone-500 text-xs">
                    No workshop enrollments recorded yet.
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="text-stone-400 uppercase text-[10px] tracking-wider border-b border-stone-100">
                                <th class="pb-3">Attendee</th>
                                <th class="pb-3">WhatsApp / Phone</th>
                                <th class="pb-3">Email</th>
                                <th class="pb-3">Workshop & Batch</th>
                                <th class="pb-3">Payment / Status</th>
                                <th class="pb-3">Date</th>
                                <th class="pb-3 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100">
                            @foreach($registrations as $reg)
                                <tr class="hover:bg-[#FCFAF7] transition">
                                    <td class="py-3.5 font-bold text-stone-900">{{ $reg->name }}</td>
                                    <td class="py-3.5 text-stone-700">{{ $reg->phone }}</td>
                                    <td class="py-3.5 text-stone-500">{{ $reg->email ?? '—' }}</td>
                                    <td class="py-3.5">
                                        <span class="font-semibold text-[#54321A]">{{ $reg->workshop->title ?? 'Masterclass' }}</span><br>
                                        <span class="text-[10px] text-stone-400">{{ $reg->batch_timing }}</span>
                                    </td>
                                    <td class="py-3.5"><span class="badge-gold text-[10px]">{{ $reg->payment_status ?? 'pending' }}</span></td>
                                    <td class="py-3.5 text-stone-400">{{ $reg->created_at->format('M d, Y') }}</td>
                                    <td class="py-3.5 text-right">
                                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $reg->phone) }}?text=Hello%20{{ urlencode($reg->name) }},%20this%20is%20regarding%20your%20registration%20for%20the%20workshop." target="_blank" class="px-3 py-1.5 bg-[#25D366] text-white text-[11px] font-semibold rounded-lg hover:bg-[#20ba5a] transition inline-block">
                                            WhatsApp
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 pt-4 border-t border-stone-100">
                    {{ $registrations->links() }}
                </div>
            @endif
        </div>

    </div>
</section>
@endsection
