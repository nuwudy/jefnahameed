@extends('layouts.app')

@section('title', 'Admin Dashboard | Jefna Hameed')

@section('content')
<section class="py-10 bg-[#FAF6F0] min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Top Admin Header -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8 bg-white p-6 rounded-3xl border border-[#DFB254]/40 shadow-sm">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-[#54321A] text-[#FAF6F0] border border-[#DFB254]/40 flex items-center justify-center font-serif text-xl font-bold">
                    JH
                </div>
                <div>
                    <span class="badge-gold text-xs mb-1">Administrative Control Center</span>
                    <h1 class="font-serif text-2xl font-bold text-[#54321A]">Welcome back, {{ Auth::user()->name ?? 'Jefna Hameed' }}</h1>
                </div>
            </div>
            
            <div class="flex items-center gap-3">
                <a href="{{ route('media.admin') }}" class="px-4 py-2 bg-[#FAF2DE] hover:bg-[#F2E5C2] text-[#8C651A] font-semibold text-xs rounded-xl border border-[#DFB254]/30 transition flex items-center gap-1.5">
                    <span>📷 Media Manager</span>
                </a>
                <a href="{{ route('home') }}" target="_blank" class="px-4 py-2 bg-[#F5EEE6] text-[#54321A] font-semibold text-xs rounded-xl transition hover:bg-stone-200">
                    Live Website ↗
                </a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-rose-50 text-rose-700 hover:bg-rose-100 font-semibold text-xs rounded-xl border border-rose-200 transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- 4 Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Consultations Inquiries -->
            <div class="bg-white border border-[#DFB254]/30 rounded-3xl p-6 shadow-sm">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Consultations</span>
                    <span class="w-10 h-10 rounded-2xl bg-[#FAF2DE] text-[#8C651A] flex items-center justify-center text-lg">💬</span>
                </div>
                <div class="text-3xl font-bold text-[#54321A]">{{ $inquiriesCount }}</div>
                <p class="text-xs text-stone-500 mt-1">Total Client Inquiries</p>
                <a href="{{ route('admin.inquiries') }}" class="text-xs font-semibold text-[#8B3846] hover:underline block mt-3">View All Inquiries →</a>
            </div>

            <!-- Workshop Enrollments -->
            <div class="bg-white border border-[#DFB254]/30 rounded-3xl p-6 shadow-sm">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Masterclasses</span>
                    <span class="w-10 h-10 rounded-2xl bg-[#FAECF0] text-[#8B3846] flex items-center justify-center text-lg">🌹</span>
                </div>
                <div class="text-3xl font-bold text-[#54321A]">{{ $registrationsCount }}</div>
                <p class="text-xs text-stone-500 mt-1">Total Workshop Attendees</p>
                <a href="{{ route('admin.registrations') }}" class="text-xs font-semibold text-[#8B3846] hover:underline block mt-3">View Enrollments →</a>
            </div>

            <!-- Newsletter Subscribers -->
            <div class="bg-white border border-[#DFB254]/30 rounded-3xl p-6 shadow-sm">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Subscribers</span>
                    <span class="w-10 h-10 rounded-2xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-lg">✉️</span>
                </div>
                <div class="text-3xl font-bold text-[#54321A]">{{ $subscribersCount }}</div>
                <p class="text-xs text-stone-500 mt-1">Mindful Notes Subscribers</p>
            </div>

            <!-- Media Library Items -->
            <div class="bg-white border border-[#DFB254]/30 rounded-3xl p-6 shadow-sm">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold text-stone-500 uppercase tracking-wider">Media Library</span>
                    <span class="w-10 h-10 rounded-2xl bg-[#FAF2DE] text-[#8C651A] flex items-center justify-center text-lg">📷</span>
                </div>
                <div class="text-3xl font-bold text-[#54321A]">{{ $mediaCount }}</div>
                <p class="text-xs text-stone-500 mt-1">Photos & Videos Uploaded</p>
                <a href="{{ route('media.admin') }}" class="text-xs font-semibold text-[#8B3846] hover:underline block mt-3">Manage Media Library →</a>
            </div>
        </div>

        <!-- Recent Inquiries Table -->
        <div class="bg-white border border-[#E8DFD3] rounded-3xl p-6 sm:p-8 shadow-sm">
            <div class="flex items-center justify-between mb-6 pb-4 border-b border-stone-100">
                <div>
                    <h3 class="font-serif text-xl font-bold text-[#54321A]">Recent Consultation Inquiries</h3>
                    <p class="text-xs text-stone-500 mt-0.5">Direct client bookings received via the platform.</p>
                </div>
                <a href="{{ route('admin.inquiries') }}" class="text-xs font-semibold text-[#54321A] hover:underline">
                    View All →
                </a>
            </div>

            @if($recentInquiries->isEmpty())
                <div class="text-center py-10 text-stone-500 text-xs">
                    No consultation requests yet.
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead>
                            <tr class="text-stone-400 uppercase text-[10px] tracking-wider border-b border-stone-100">
                                <th class="pb-3">Client</th>
                                <th class="pb-3">Phone / WhatsApp</th>
                                <th class="pb-3">Service Focus</th>
                                <th class="pb-3">Mode & Slot</th>
                                <th class="pb-3">Date</th>
                                <th class="pb-3 text-right">Quick Contact</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-100">
                            @foreach($recentInquiries as $inquiry)
                                <tr class="hover:bg-[#FCFAF7] transition">
                                    <td class="py-3.5 font-bold text-stone-900">{{ $inquiry->name }}</td>
                                    <td class="py-3.5 text-stone-700">{{ $inquiry->phone }}</td>
                                    <td class="py-3.5"><span class="badge-olive text-[10px]">{{ $inquiry->service_type }}</span></td>
                                    <td class="py-3.5 text-stone-600">{{ $inquiry->session_mode ?? 'Online' }} • {{ $inquiry->preferred_slot ?? 'Flexible' }}</td>
                                    <td class="py-3.5 text-stone-400">{{ $inquiry->created_at->format('M d, Y') }}</td>
                                    <td class="py-3.5 text-right">
                                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->phone) }}" target="_blank" class="px-3 py-1.5 bg-[#25D366] text-white text-[11px] font-semibold rounded-lg hover:bg-[#20ba5a] transition">
                                            WhatsApp
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

    </div>
</section>
@endsection
