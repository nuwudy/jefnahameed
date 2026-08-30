@extends('layouts.app')

@section('title', 'Relationship & Marriage Guidance Blog | Jefna Hameed')
@section('meta_description', 'Practical clinical psychology articles, marriage transformation frameworks, and emotional boundary guidance by family counselor Jefna Hameed.')

@section('content')

<!-- Header Banner -->
<section class="py-16 sm:py-20 bg-gradient-to-b from-[#FAF6F0] to-[#F5EFEB] border-b border-[#DFB254]/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="badge-gold text-xs mb-3">📖 Clinical Notes & Insights</span>
        <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-[#54321A] tracking-tight">
            Relationship Guidance & Healing Articles
        </h1>
        <p class="text-sm sm:text-base text-stone-600 max-w-2xl mx-auto mt-4 leading-relaxed">
            Evidence-based frameworks, communication scripts, and psychological insights to navigate marriage challenges, toxic patterns, and emotional healing.
        </p>
    </div>
</section>

<!-- Blog List Stream -->
<section class="py-12 sm:py-16 bg-[#FAF6F0]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <livewire:blog-list />
    </div>
</section>

<!-- Bottom CTA Banner -->
<section class="py-16 bg-[#54321A] text-[#FAF6F0] border-t border-[#DFB254]/30">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <span class="px-3.5 py-1.5 rounded-full bg-white/10 text-[#DFB254] text-xs font-semibold uppercase tracking-wider border border-[#DFB254]/30">
            Confidential Professional Support
        </span>
        <h2 class="font-serif text-3xl sm:text-4xl font-bold">
            Need Personalized Support for Your Relationship?
        </h2>
        <p class="text-sm text-stone-300 max-w-xl mx-auto">
            Book a confidential 1-on-1 or couples session with Jefna Hameed today. Online worldwide or in-person in Kerala.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
            <button type="button"
                    @click="$dispatch('open-booking-modal')"
                    class="px-8 py-3.5 bg-white text-[#54321A] font-semibold text-xs rounded-xl shadow-lg hover:bg-[#FAF8F5] transition">
                Book a Confidential Session 💍
            </button>
            <a href="https://wa.me/918590415943?text=Hello%20Jefna%20Hameed,%20I%20read%20your%20blog%20and%20would%20like%20to%20inquire%20about%20a%20session."
               target="_blank"
               class="px-6 py-3.5 bg-[#25D366] hover:bg-[#20ba5a] text-white font-semibold text-xs rounded-xl shadow-sm transition flex items-center gap-2">
                <span>Chat on WhatsApp (+91 85904 15943)</span>
            </a>
        </div>
    </div>
</section>

@endsection
