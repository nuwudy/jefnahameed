@extends('layouts.app')

@section('title', 'Consultation Inquiries | Admin Portal')

@section('content')
<section class="py-10 bg-[#FAF6F0] min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex items-center justify-between mb-6">
            <a href="{{ route('admin.dashboard') }}" class="text-xs font-semibold text-[#54321A] hover:underline flex items-center gap-1">
                ← Back to Dashboard
            </a>
            <span class="text-xs text-stone-500">Total Records: {{ $inquiries->total() }}</span>
        </div>

        <div class="bg-white border border-[#E8DFD3] rounded-3xl p-6 sm:p-8 shadow-sm">
            <h2 class="font-serif text-2xl font-bold text-[#54321A] mb-6">All Consultation Inquiries</h2>

            @if($inquiries->isEmpty())
                <div class="text-center py-12 text-stone-500 text-xs">
                    No inquiry records found.
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="text-stone-400 uppercase text-[10px] tracking-wider border-b border-stone-100">
                                <th class="pb-3">Client Name</th>
                                <th class="pb-3">Phone & Email</th>
                                <th class="pb-3">Service</th>
                                <th class="pb-3">Preferred Mode / Slot</th>
                                <th class="pb-3">Note</th>
                                <th class="pb-3">Date</th>
                                <th class="pb-3 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100">
                            @foreach($inquiries as $inquiry)
                                <tr class="hover:bg-[#FCFAF7] transition">
                                    <td class="py-3.5 font-bold text-stone-900">{{ $inquiry->name }}</td>
                                    <td class="py-3.5 text-stone-700">
                                        {{ $inquiry->phone }}<br>
                                        <span class="text-[11px] text-stone-400">{{ $inquiry->email ?? 'No email provided' }}</span>
                                    </td>
                                    <td class="py-3.5"><span class="badge-olive text-[10px]">{{ $inquiry->service_type }}</span></td>
                                    <td class="py-3.5 text-stone-600">
                                        {{ $inquiry->session_mode ?? 'Online' }}<br>
                                        <span class="text-[11px] text-stone-400">{{ $inquiry->preferred_slot ?? 'Flexible' }}</span>
                                    </td>
                                    <td class="py-3.5 text-stone-600 max-w-xs truncate">{{ $inquiry->message ?? '—' }}</td>
                                    <td class="py-3.5 text-stone-400">{{ $inquiry->created_at->format('M d, Y') }}</td>
                                    <td class="py-3.5 text-right">
                                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}" target="_blank" class="px-3 py-1.5 bg-[#25D366] text-white text-[11px] font-semibold rounded-lg hover:bg-[#20ba5a] transition inline-block">
                                            WhatsApp
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-6 pt-4 border-t border-stone-100">
                    {{ $inquiries->links() }}
                </div>
            @endif
        </div>

    </div>
</section>
@endsection
