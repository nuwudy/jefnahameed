@extends('layouts.app')

@section('title', 'Media & Gallery | Jefna Hameed — Family Counselor & Relationship Specialist')
@section('meta_description', 'Browse photos, masterclass highlights, video talks, and relationship guidance reels from Jefna Hameed.')

@section('content')
<!-- Page Header Banner -->
<section class="py-16 sm:py-20 bg-gradient-to-b from-[#FAF6F0] to-[#F5EFEB] border-b border-[#DFB254]/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge-gold text-xs mb-3">💖 Moments & Transformations</span>
        <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-[#54321A] tracking-tight">
            Media Library & Visual Stories
        </h1>
        <p class="text-sm sm:text-base text-stone-600 max-w-2xl mx-auto mt-4 leading-relaxed">
            A visual glimpse into our workshops, relationship guidance talks, couples masterclasses, and real marriage transformations.
        </p>
    </div>
</section>

<!-- Image Ticker Slider on Media Page -->
<x-image-ticker-slider title="Featured Transformations & Moments" subtitle="Click any moment to view in high resolution or learn more." />

<!-- Main Gallery Section with Livewire Filter -->
<section class="py-12 sm:py-16 bg-[#FAF6F0]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <livewire:media-gallery />
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-16 bg-[#54321A] text-[#FAF6F0] border-t border-[#DFB254]/30">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <span class="px-3.5 py-1.5 rounded-full bg-white/10 text-[#DFB254] text-xs font-semibold uppercase tracking-wider border border-[#DFB254]/30">
            Ready to Begin Your Healing Journey?
        </span>
        <h2 class="font-serif text-3xl sm:text-4xl font-bold">
            Experience Compassionate, Confidential Family Guidance
        </h2>
        <p class="text-sm text-stone-300 max-w-xl mx-auto">
            Book a 1-on-1 private consultation or join an upcoming weekend masterclass cohort.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
            <button type="button"
                    @click="$dispatch('open-booking-modal')"
                    class="px-8 py-3.5 bg-white text-[#54321A] font-semibold text-xs rounded-xl shadow-lg hover:bg-[#FAF8F5] transition">
                Book Consultation 💍
            </button>
            <a href="https://wa.me/918590415943?text=Hello%20Jefna,%20I%20would%20like%20to%20inquire%20about%20your%20counselling%20and%20workshops."
               target="_blank"
               class="px-6 py-3.5 bg-[#25D366] hover:bg-[#20ba5a] text-white font-semibold text-xs rounded-xl shadow-sm transition flex items-center gap-2">
                <span>Chat on WhatsApp (+91 85904 15943)</span>
            </a>
        </div>
    </div>
</section>
@endsection
