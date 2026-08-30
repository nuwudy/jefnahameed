@extends('layouts.app')

@section('title', 'Media & Gallery | Jefna Hameed — Family Counselor & Relationship Specialist')
@section('meta_description', 'Browse photos, masterclass highlights, video talks, and relationship guidance reels from Jefna Hameed.')

@section('content')
<!-- Page Header Banner -->
<section class="py-16 sm:py-20 bg-gradient-to-b from-[#FAF8F5] to-[#F7F3EE] border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge-olive text-xs mb-3">Moments & Masterclasses</span>
        <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-[#3B4E3B] tracking-tight">
            Media Library & Video Insights
        </h1>
        <p class="text-sm sm:text-base text-stone-600 max-w-2xl mx-auto mt-4 leading-relaxed">
            A visual glimpse into our workshops, relationship guidance talks, couples masterclasses, and counseling moments.
        </p>
    </div>
</section>

<!-- Main Gallery Section with Livewire Filter -->
<section class="py-12 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <livewire:media-gallery />
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-16 bg-[#3B4E3B] text-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <span class="px-3.5 py-1.5 rounded-full bg-white/10 text-white/90 text-xs font-semibold uppercase tracking-wider">
            Ready to Begin Your Healing Journey?
        </span>
        <h2 class="font-serif text-3xl sm:text-4xl font-bold">
            Experience Compassionate, Confidential Family Guidance
        </h2>
        <p class="text-sm text-stone-200 max-w-xl mx-auto">
            Book a 1-on-1 private consultation or join an upcoming weekend masterclass cohort.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
            <button type="button"
                    @click="$dispatch('open-booking-modal')"
                    class="px-8 py-3.5 bg-white text-[#3B4E3B] font-semibold text-xs rounded-xl shadow-lg hover:bg-[#FAF8F5] transition">
                Book Consultation
            </button>
            <a href="https://wa.me/918590415943?text=Hello%20Jefna,%20I%20would%20like%20to%20inquire%20about%20your%20counselling%20and%20workshops."
               target="_blank"
               class="px-6 py-3.5 bg-[#25D366] hover:bg-[#20ba5a] text-white font-semibold text-xs rounded-xl shadow-sm transition flex items-center gap-2">
                <span>Chat on WhatsApp</span>
            </a>
        </div>
    </div>
</section>
@endsection
