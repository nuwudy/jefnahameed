@extends('layouts.app')

@section('title', 'Jefna Hameed | Family Counselor & Marriage Guidance')
@section('meta_description', 'From Divorce Talks to Honeymoon Days: Reclaim Your Marriage. Compassionate, confidential family counselling and marriage guidance with Jefna Hameed.')

@section('content')

<!-- 0. CUTE THROBBING ANNOUNCEMENT TICKER -->
<div class="relative overflow-hidden bg-gradient-to-r from-[#FAF2DE] via-[#FAECF0] to-[#FAF2DE] border-b border-[#DFB254]/30 py-2 sm:py-2.5 text-xs text-[#54321A]">
    <div class="max-w-7xl mx-auto px-4 flex items-center gap-3">
        <!-- Cute Pulsing/Throbbing Love Pill (Anchor) -->
        <div class="shrink-0 z-10 flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/95 border border-[#8B3846]/30 shadow-xs text-[11px] font-bold text-[#8B3846]">
            <span class="animate-cute-throb text-sm">💖</span>
            <span>Live Notice</span>
        </div>

        <!-- Marquee Ticker Stream -->
        <div class="overflow-hidden whitespace-nowrap flex-1 relative flex items-center">
            <div class="animate-marquee flex items-center gap-8 text-[11px] sm:text-xs font-medium">
                <!-- Group 1 -->
                <span class="inline-flex items-center gap-2">
                    <span class="text-[#8B3846]">🌹</span>
                    <span>Upcoming Masterclass: <strong>Avoid Toxic Relationships</strong></span>
                    <a href="#workshops" class="font-bold underline text-[#8B3846] hover:text-[#6C2430]">Reserve Seat →</a>
                </span>
                <span class="text-[#C29336]">✦</span>
                <span class="inline-flex items-center gap-2">
                    <span class="text-[#54321A]">💍</span>
                    <span>Reclaim Your Marriage: <strong>Confidential Couple Guidance Slots Open</strong></span>
                    <button type="button" @click="$dispatch('open-booking-modal')" class="font-bold underline text-[#54321A] hover:text-[#3B2110] cursor-pointer">Book Session →</button>
                </span>
                <span class="text-[#C29336]">✦</span>
                <span class="inline-flex items-center gap-2">
                    <span>✨</span>
                    <span>1,500+ Couples &amp; Individuals Guided to Peaceful, Loving Bonds</span>
                </span>
                <span class="text-[#C29336]">✦</span>
                <span class="inline-flex items-center gap-2">
                    <span>🕊️</span>
                    <span>100% Private, Safe &amp; Non-Judgmental Psychological Sanctuary</span>
                </span>
                <span class="text-[#C29336]">✦</span>
                <span class="inline-flex items-center gap-2">
                    <span>💌</span>
                    <span>WhatsApp Inquiry Fast-Track: <strong>+91 85904 15943</strong></span>
                </span>
                <span class="text-[#C29336]">✦</span>

                <!-- Group 2 (Duplicate for Seamless Continuous Loop) -->
                <span class="inline-flex items-center gap-2">
                    <span class="text-[#8B3846]">🌹</span>
                    <span>Upcoming Masterclass: <strong>Avoid Toxic Relationships</strong></span>
                    <a href="#workshops" class="font-bold underline text-[#8B3846] hover:text-[#6C2430]">Reserve Seat →</a>
                </span>
                <span class="text-[#C29336]">✦</span>
                <span class="inline-flex items-center gap-2">
                    <span class="text-[#54321A]">💍</span>
                    <span>Reclaim Your Marriage: <strong>Confidential Couple Guidance Slots Open</strong></span>
                    <button type="button" @click="$dispatch('open-booking-modal')" class="font-bold underline text-[#54321A] hover:text-[#3B2110] cursor-pointer">Book Session →</button>
                </span>
                <span class="text-[#C29336]">✦</span>
                <span class="inline-flex items-center gap-2">
                    <span>✨</span>
                    <span>1,500+ Couples &amp; Individuals Guided to Peaceful, Loving Bonds</span>
                </span>
                <span class="text-[#C29336]">✦</span>
                <span class="inline-flex items-center gap-2">
                    <span>🕊️</span>
                    <span>100% Private, Safe &amp; Non-Judgmental Psychological Sanctuary</span>
                </span>
                <span class="text-[#C29336]">✦</span>
                <span class="inline-flex items-center gap-2">
                    <span>💌</span>
                    <span>WhatsApp Inquiry Fast-Track: <strong>+91 85904 15943</strong></span>
                </span>
                <span class="text-[#C29336]">✦</span>
            </div>
        </div>
    </div>
</div>

<!-- 1. HERO SECTION -->
<section class="relative overflow-hidden pt-8 pb-16 lg:pt-14 lg:pb-24 honeymoon-glow">
    <!-- Subtle Ambient Warm Glows -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[650px] h-[380px] bg-[#DFB254]/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/3 right-10 w-[350px] h-[350px] bg-[#8B3846]/8 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Copy Column (7 cols) -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- Badge Pill -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#FAF2DE] border border-[#DFB254]/40 text-[#8C651A] text-xs font-semibold tracking-wider uppercase shadow-xs">
                    <span class="text-sm">💍</span>
                    <span>Relationship Transformation by Jefna Hameed</span>
                    <span class="text-xs text-[#C29336]">✨</span>
                </div>

                <!-- Primary Headline -->
                <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-[#54321A] tracking-tight leading-[1.15]">
                    From Divorce Talks to Honeymoon Days: <br class="hidden sm:inline" />
                    <span class="italic font-normal text-[#8B3846]">Reclaim Your Marriage.</span>
                </h1>

                <!-- Subheadline with Malayalam subtle nuance -->
                <p class="text-base sm:text-lg text-stone-700 font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Break the toxic cycles, heal hidden resentment, and restore true emotional intimacy through targeted, confidential clinical guidance.
                </p>
                <p class="text-xs sm:text-sm text-[#6B4226] font-serif italic max-w-xl mx-auto lg:mx-0 border-l-2 border-[#8B3846] pl-3 py-1 bg-white/40 rounded-r-xl">
                    "ഭാര്യയും ഭർത്താവും — സ്നേഹം മനസ്സിലാക്കുമ്പോൾ ജീവിതം മനോഹരമാവും. ശാസ്ത്രീയമായ കൗൺസിലിംഗിലൂടെ സന്തോഷമുള്ള ബന്ധങ്ങൾ കെട്ടിപ്പടുക്കാം." 🌹
                </p>

                <!-- CTA Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    <button type="button"
                            @click="$dispatch('open-booking-modal')"
                            class="w-full sm:w-auto px-8 py-4 bg-[#54321A] hover:bg-[#3B2110] text-[#FAF6F0] font-medium text-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2 cursor-pointer border border-[#DFB254]/40">
                        <span>Book a Confidential Session</span>
                        <span class="text-amber-300">✨</span>
                    </button>
                    <a href="https://wa.me/918590415943?text=Hello%20Jefna%20Hameed,%20I%20would%20like%20to%20inquire%20about%20a%20confidential%20marriage%20guidance%20session."
                       target="_blank"
                       rel="noopener noreferrer"
                       class="w-full sm:w-auto px-7 py-4 bg-[#25D366] hover:bg-[#20ba5a] text-white font-medium text-sm rounded-2xl shadow-sm hover:shadow-md transition text-center flex items-center justify-center gap-2.5">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                        <span>Chat on WhatsApp</span>
                    </a>
                </div>

                <!-- Trust Badges Strip -->
                <div class="pt-6 border-t border-[#E8DFD3] flex flex-wrap items-center justify-center lg:justify-start gap-x-6 gap-y-3 text-xs text-stone-600">
                    <div class="flex items-center gap-2">
                        <span class="text-[#C29336]">🔒</span>
                        <span>100% Confidential Support</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[#8B3846]">💞</span>
                        <span>Compassionate Marriage Healing</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-[#54321A]">🌍</span>
                        <span>Online Worldwide & Kerala In-Person</span>
                    </div>
                </div>
            </div>

            <!-- Right Visual Portrait Presentation Column (5 cols) -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <!-- Main Card Frame with Warm Ambient Glow -->
                    <div class="relative rounded-3xl bg-[#FCFAF7] border border-[#DFB254]/30 p-3.5 shadow-2xl overflow-hidden group ambient-warm-glow">
                        <div class="relative aspect-[3/4] sm:aspect-[4/5] rounded-2xl overflow-hidden bg-stone-100 shadow-inner">
                            <!-- Real Portrait Photo -->
                            <img src="{{ asset('images/jefna-hameed.webp') }}"
                                 alt="Jefna Hameed — Family Counselor & Relationship Specialist"
                                 class="w-full h-full object-cover object-top transition-transform duration-700 ease-out group-hover:scale-105"
                                 loading="eager">
                            
                            <!-- Soft Warm Gradient Overlay for Legibility -->
                            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#3B2110]/95 via-[#54321A]/50 to-transparent flex items-end p-5">
                                <div>
                                    <h3 class="font-serif text-xl font-bold text-[#FAF6F0] leading-tight flex items-center gap-2">
                                        <span>Jefna Hameed</span>
                                        <span class="text-xs text-amber-300">✨</span>
                                    </h3>
                                    <p class="text-xs font-medium text-[#DFB254] tracking-wide uppercase mt-0.5">Family Counselor & Relationship Specialist</p>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Credential Card - Top Left -->
                        <div class="absolute top-6 left-6 glass-panel px-3.5 py-2 rounded-2xl shadow-lg border border-[#DFB254]/40 flex items-center gap-2.5">
                            <div class="w-7 h-7 rounded-full bg-[#FAF2DE] text-[#8C651A] flex items-center justify-center text-xs font-bold">
                                💍
                            </div>
                            <div>
                                <p class="text-[11px] font-bold text-[#54321A] leading-tight">Marriage Counselor</p>
                                <p class="text-[10px] text-stone-500">Certified Practitioner</p>
                            </div>
                        </div>

                        <!-- Floating Stats Card - Bottom Right -->
                        <div class="absolute bottom-6 right-6 glass-panel px-3.5 py-2 rounded-2xl shadow-lg border border-[#DFB254]/40 flex items-center gap-2.5">
                            <div class="w-7 h-7 rounded-full bg-[#FAECF0] text-[#8B3846] flex items-center justify-center text-xs font-bold">
                                💞
                            </div>
                            <div>
                                <p class="text-[11px] font-bold text-[#54321A] leading-tight">1,500+ Couples</p>
                                <p class="text-[10px] text-stone-500">Restored Harmony</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 1.5 REAL TRANSFORMATION & HONEYMOON IMAGE TICKER SLIDER -->
<x-image-ticker-slider />

<!-- 2. FEATURED MASTERCLASS SECTION -->
<section id="workshops" class="py-16 sm:py-24 bg-[#FCFAF7] border-y border-[#E8DFD3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="badge-rose mb-3">🌹 Live Interactive Masterclass</span>
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-[#54321A] tracking-tight">
                "Avoid Toxic Relationships"
            </h2>
            <p class="text-base text-stone-700 mt-3 leading-relaxed">
                A structured guidance masterclass specifically curated for women to recognize subtle emotional manipulation, establish unshakeable boundaries, and heal with confidence.
            </p>
        </div>

        <!-- Featured Card Container -->
        <div class="bg-white border border-[#DFB254]/30 rounded-3xl p-6 sm:p-10 shadow-lg">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                
                <!-- Left: Workshop Details & Curriculum (7 cols) -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#FAF2DE] text-[#8C651A] border border-[#DFB254]/30">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            2.5 Hours Live + 30 Mins Confidential Q&A
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#F5EEE6] text-[#54321A]">
                            🌐 Malayalam & English (Bilingual)
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#FAECF0] text-[#8B3846]">
                            💻 Live Private Zoom
                        </span>
                    </div>

                    <h3 class="font-serif text-2xl font-bold text-[#54321A]">
                        What You Will Master in this Masterclass:
                    </h3>

                    <!-- Curriculum List -->
                    <div class="space-y-4">
                        @if(!empty($featuredWorkshop->curriculum))
                            @foreach($featuredWorkshop->curriculum as $index => $item)
                                <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-[#FCFAF7] border border-[#E8DFD3] transition hover:border-[#C29336]">
                                    <div class="w-7 h-7 rounded-xl bg-[#54321A] text-[#FAF6F0] flex items-center justify-center text-xs font-bold shrink-0 mt-0.5 shadow-xs">
                                        {{ $index + 1 }}
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-semibold text-[#54321A]">{{ $item['title'] }}</h4>
                                        <p class="text-xs text-stone-600 mt-0.5 leading-relaxed">{{ $item['desc'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="p-4 bg-stone-50 rounded-xl text-xs text-stone-600">Curriculum details updating shortly.</div>
                        @endif
                    </div>

                    <!-- Takeaways / Bonuses -->
                    <div class="pt-4 border-t border-[#E8DFD3] grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-stone-700">
                        <div class="flex items-center gap-2">
                            <span class="text-[#C29336] font-bold">✓</span>
                            <span>Downloadable Boundary Script Cheatsheet</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-[#C29336] font-bold">✓</span>
                            <span>Confidential Anonymous Q&A Session</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-[#C29336] font-bold">✓</span>
                            <span>Lifetime Self-Worth Recovery Guide</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-[#C29336] font-bold">✓</span>
                            <span>Certificate of Attendance</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Interactive Livewire Enrollment Box (5 cols) -->
                <div class="lg:col-span-5">
                    @if($featuredWorkshop)
                        <livewire:workshop-enrollment :workshop="$featuredWorkshop" />
                    @endif
                </div>

            </div>
        </div>

    </div>
</section>


<!-- 3. COUNSELLING & SERVICES GRID -->
<section id="counselling-services" class="py-16 sm:py-24 bg-[#FAF6F0]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="badge-gold mb-3">✨ Sacred Bonds & Guidance</span>
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-[#54321A] tracking-tight">
                Family & Couple Counselling Services
            </h2>
            <p class="text-base text-stone-700 mt-3 leading-relaxed">
                Evidence-based relationship counselling tailored for couples, individuals, and families seeking emotional clarity, mutual understanding, and durable healing.
            </p>
        </div>

        <!-- 3-Column Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="bg-white border border-[#E8DFD3] rounded-3xl p-7 shadow-sm flex flex-col justify-between card-hover-lift">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="badge-olive">{{ $service['badge'] }}</span>
                            <div class="w-10 h-10 rounded-2xl bg-[#FAF2DE] border border-[#DFB254]/30 flex items-center justify-center text-[#8C651A]">
                                @if($service['icon'] === 'couple')
                                    <span class="text-lg">💍</span>
                                @elseif($service['icon'] === 'therapy')
                                    <span class="text-lg">🤍</span>
                                @else
                                    <span class="text-lg">🌹</span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <h3 class="font-serif text-xl font-bold text-[#54321A] mb-1">{{ $service['title'] }}</h3>
                            <p class="text-xs font-serif italic text-[#8B3846] mb-2">{{ $service['malayalam_title'] }}</p>
                            <p class="text-xs text-stone-600 leading-relaxed">{{ $service['description'] }}</p>
                        </div>

                        <!-- Benefits Checklist -->
                        <div class="pt-3 border-t border-stone-100 space-y-2">
                            @foreach($service['benefits'] as $b)
                                <div class="flex items-center gap-2 text-xs text-stone-700">
                                    <span class="text-[#C29336] font-bold">✓</span>
                                    <span>{{ $b }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="pt-6 mt-6 border-t border-stone-100">
                        <button type="button"
                                @click="$dispatch('open-booking-modal', { service: '{{ $service['title'] }}' })"
                                class="w-full py-2.5 bg-[#FAF6F0] hover:bg-[#54321A] text-[#54321A] hover:text-white border border-[#54321A]/20 text-xs font-semibold rounded-xl transition shadow-xs cursor-pointer">
                            Book {{ $service['title'] }}
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>


<!-- 4. ABOUT THE FAMILY COUNSELOR -->
<section id="about" class="py-16 sm:py-24 bg-[#FCFAF7] border-y border-[#E8DFD3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Bio Card Presentation (5 cols) -->
            <div class="lg:col-span-5">
                <div class="bg-white border border-[#DFB254]/30 rounded-3xl p-6 sm:p-8 shadow-md relative overflow-hidden">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="w-20 h-20 rounded-2xl overflow-hidden border-2 border-[#DFB254]/40 shadow-sm shrink-0">
                            <img src="{{ asset('images/jefna-hameed.webp') }}" alt="Jefna Hameed" class="w-full h-full object-cover object-top">
                        </div>
                        <div>
                            <h3 class="font-serif text-2xl font-bold text-[#54321A] flex items-center gap-1.5">
                                <span>Jefna Hameed</span>
                                <span class="text-xs text-[#C29336]">✨</span>
                            </h3>
                            <p class="text-xs font-semibold text-[#8B3846] uppercase tracking-wider mt-0.5">Family Counselor & Relationship Specialist</p>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-stone-100 space-y-2.5 text-xs text-stone-600">
                        <div class="flex items-center gap-2">
                            <span class="text-[#C29336]">✓</span>
                            <span>Specialized in Marriage Guidance & Family Systems</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-[#C29336]">✓</span>
                            <span>Certified Cognitive & Behavioral Relationship Coach</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-[#C29336]">✓</span>
                            <span>Experienced in Cross-Cultural & NRI Family Dynamics</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-[#C29336]">✓</span>
                            <span>Bilingual Sessions in Malayalam & English</span>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-stone-100 flex items-center justify-between">
                        <span class="text-xs text-stone-500">Kochi • Calicut • Worldwide Online</span>
                        <a href="https://wa.me/918590415943" target="_blank" class="text-xs font-semibold text-[#54321A] hover:underline flex items-center gap-1">
                            <span>Direct Inquiry</span> →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Biography & Approach (7 cols) -->
            <div class="lg:col-span-7 space-y-6">
                <span class="badge-gold">🕊️ About the Family Counselor</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#54321A] tracking-tight">
                    Compassionate, Confidential & Practical Guidance
                </h2>
                
                <!-- Prominent Blockquote Callout -->
                <div class="bg-[#FAECF0] border-l-4 border-[#8B3846] p-5 rounded-r-2xl">
                    <p class="font-serif text-lg sm:text-xl font-medium text-[#8B3846] italic">
                        "A healthy relationship adds value to your life, not drains you."
                    </p>
                    <p class="text-xs text-stone-600 mt-1">— Jefna Hameed, Family Counselor</p>
                </div>

                <p class="text-sm text-stone-700 leading-relaxed">
                    With extensive experience in family counseling and relationship guidance, Jefna Hameed helps individuals and couples dismantle dysfunctional patterns, heal from toxic dynamics, and build emotionally secure, fulfilling lives.
                </p>
                <p class="text-sm text-stone-700 leading-relaxed">
                    Whether you are struggling with recurring conflicts in your marriage, recovering from manipulative dynamics, or seeking the courage to set firm personal boundaries, counselling provides a structured, non-judgmental space to gain clarity and self-respect.
                </p>

                <!-- Core Pillars -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-2xl bg-white border border-[#E8DFD3]">
                        <h4 class="text-xs font-bold text-[#54321A] uppercase tracking-wider mb-1 flex items-center gap-1.5">
                            <span>🌹</span>
                            <span>Empathetic Safe Container</span>
                        </h4>
                        <p class="text-xs text-stone-600">Zero judgment. Complete freedom to express emotions at your own pace.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-white border border-[#E8DFD3]">
                        <h4 class="text-xs font-bold text-[#54321A] uppercase tracking-wider mb-1 flex items-center gap-1.5">
                            <span>💍</span>
                            <span>Practical Frameworks</span>
                        </h4>
                        <p class="text-xs text-stone-600">Actionable scripts and worksheets to handle real-life conflicts smoothly.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- 5. WHY CHOOSE FAMILY COUNSELLING -->
<section id="why-therapy" class="py-16 sm:py-24 bg-[#FAF6F0]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="badge-rose mb-3">💞 The Professional Difference</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#54321A] tracking-tight">
                Why Professional Family Counselling Matters
            </h2>
            <p class="text-base text-stone-700 mt-3 leading-relaxed">
                Why casual social media tips and well-meaning friends cannot replace structured relationship counselling.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Unstructured Casual Advice -->
            <div class="bg-white/80 border border-[#E8DFD3] rounded-3xl p-6 sm:p-8 space-y-4">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-rose-50 text-rose-700 border border-rose-200">
                    ✕ Casual Advice / Unstructured Opinions
                </div>
                <h3 class="font-serif text-lg font-bold text-stone-800">Temporary Band-Aids</h3>
                <ul class="space-y-3 text-xs text-stone-600">
                    <li class="flex items-start gap-2">
                        <span class="text-rose-500 font-bold">✕</span>
                        <span>Biased perspectives that often escalate misunderstandings and blame.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-rose-500 font-bold">✕</span>
                        <span>Superficial advice like "just compromise" without addressing core emotional hurts.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-rose-500 font-bold">✕</span>
                        <span>Normalizing unhealthy dynamics and boundary violations under guilt or social pressure.</span>
                    </li>
                </ul>
            </div>

            <!-- Structured Family Counselling -->
            <div class="bg-[#FAF2DE]/80 border border-[#DFB254]/40 rounded-3xl p-6 sm:p-8 space-y-4 shadow-sm">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#54321A] text-[#FAF6F0]">
                    ✓ Professional Family Counselling with Jefna Hameed
                </div>
                <h3 class="font-serif text-lg font-bold text-[#54321A]">Deep, Sustainable Transformation</h3>
                <ul class="space-y-3 text-xs text-stone-700">
                    <li class="flex items-start gap-2">
                        <span class="text-[#C29336] font-bold">✓</span>
                        <span>Neutral, objective space where root communication breakdowns and triggers are resolved.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#C29336] font-bold">✓</span>
                        <span>Evidence-based relationship and systemic communication frameworks tailored to your family dynamic.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-[#C29336] font-bold">✓</span>
                        <span>Empowering you with boundaries, self-worth, and emotional clarity that lasts a lifetime.</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>


<!-- 6. TESTIMONIALS & CLIENT STORIES -->
<section id="testimonials" class="py-16 sm:py-24 bg-[#FCFAF7] border-y border-[#E8DFD3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="badge-gold mb-3">💍 Rebuilt Bonds</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#54321A] tracking-tight">
                Transformation & Healing Journeys
            </h2>
            <p class="text-base text-stone-700 mt-3 leading-relaxed">
                Real reflections from individuals and couples who took the courageous step to seek clarity and peace.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($testimonials as $t)
                <div class="bg-white border border-[#E8DFD3] rounded-3xl p-6 shadow-sm flex flex-col justify-between card-hover-lift">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex text-[#C29336] text-sm">
                                @for($i = 0; $i < $t->rating; $i++)
                                    ★
                                @endfor
                            </div>
                            <span class="text-[10px] uppercase font-semibold px-2 py-0.5 rounded-full bg-[#FAF2DE] text-[#8C651A]">
                                Verified
                            </span>
                        </div>

                        <p class="text-xs text-stone-700 leading-relaxed italic">
                            "{{ $t->quote }}"
                        </p>

                        @if($t->quote_ml)
                            <p class="text-[11px] text-stone-500 font-serif leading-relaxed border-t border-stone-100 pt-2 italic">
                                "{{ $t->quote_ml }}"
                            </p>
                        @endif
                    </div>

                    <div class="pt-4 mt-4 border-t border-stone-100">
                        <h4 class="text-xs font-bold text-[#54321A]">{{ $t->client_name }}</h4>
                        <p class="text-[11px] text-[#8B3846] font-medium">{{ $t->client_tag }}</p>
                        <p class="text-[10px] text-stone-400 mt-0.5">{{ $t->location }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>


<!-- 6.5 MEDIA & VIDEO HIGHLIGHTS -->
<section id="media-preview" class="py-16 sm:py-24 bg-[#FAF6F0] border-t border-[#E8DFD3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div class="max-w-2xl">
                <span class="badge-rose mb-2">🎬 Media & Video Insights</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#54321A] tracking-tight">
                    Workshop Highlights & Guidance Talks
                </h2>
                <p class="text-sm text-stone-600 mt-2">
                    Glimpses into our live interactive cohorts, relationship masterclasses, and practical psychology frameworks.
                </p>
            </div>
            <a href="{{ route('media.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white hover:bg-stone-50 text-[#54321A] border border-[#DFB254]/40 font-semibold text-xs rounded-xl shadow-xs transition shrink-0">
                <span>View Full Media Library (Photos & Videos)</span> →
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Item 1 -->
            <div class="group bg-white border border-[#E8DFD3] rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between card-hover-lift">
                <div class="relative aspect-[4/3] bg-stone-100 overflow-hidden">
                    <img src="{{ asset('images/gallery/family-court-reconciliation.webp') }}" alt="From Family Court to Restored Marriage" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-[10px] font-semibold bg-[#54321A]/90 text-white">💍 Reclaimed Bond</span>
                </div>
                <div class="p-5">
                    <span class="text-[10px] font-semibold text-[#8B3846] uppercase">Marriage Guidance</span>
                    <h4 class="font-serif text-base font-bold text-[#54321A] mt-1">From Divorce Talks to Lasting Marriage</h4>
                    <p class="text-xs text-stone-500 mt-1.5 line-clamp-2">A couple walking out of Kerala Family Court reunited, hand-in-hand.</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="group bg-white border border-[#E8DFD3] rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between card-hover-lift">
                <div class="relative aspect-[4/3] bg-stone-100 overflow-hidden">
                    <img src="{{ asset('images/gallery/sunset-cliff-honeymoon.webp') }}" alt="Honeymoon Sunset Moments" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-[10px] font-semibold bg-[#8B3846] text-white">🌅 Honeymoon Days</span>
                </div>
                <div class="p-5">
                    <span class="text-[10px] font-semibold text-[#8B3846] uppercase">Intimacy & Healing</span>
                    <h4 class="font-serif text-base font-bold text-[#54321A] mt-1">Sunset Intimacy by the Ocean</h4>
                    <p class="text-xs text-stone-500 mt-1.5 line-clamp-2">Restoring true emotional safety and mutual appreciation.</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="group bg-white border border-[#E8DFD3] rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between card-hover-lift">
                <div class="relative aspect-[4/3] bg-stone-100 overflow-hidden">
                    <img src="{{ asset('images/gallery/loving-family-home.webp') }}" alt="Loving Family Home" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full text-[10px] font-semibold bg-[#54321A]/90 text-white">🏡 Family Peace</span>
                </div>
                <div class="p-5">
                    <span class="text-[10px] font-semibold text-[#8B3846] uppercase">Family Sanctuary</span>
                    <h4 class="font-serif text-base font-bold text-[#54321A] mt-1">Loving & Secure Family Life</h4>
                    <p class="text-xs text-stone-500 mt-1.5 line-clamp-2">Creating an emotionally peaceful home where parents and children thrive.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 7. INTERACTIVE FAQ ACCORDION -->
<section id="faq" class="py-16 sm:py-24 bg-[#FCFAF7]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ active: null }">
        
        <div class="text-center mb-14">
            <span class="badge-gold mb-3">✨ Frequently Asked Questions</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#54321A] tracking-tight">
                Everything You Need to Know
            </h2>
            <p class="text-sm text-stone-600 mt-2">Clear answers about privacy, session format, and counselling outcomes.</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-white border border-[#E8DFD3] rounded-2xl overflow-hidden shadow-sm">
                <button type="button" @click="active = (active === 1 ? null : 1)" class="w-full p-5 text-left flex items-center justify-between gap-4 font-serif text-base font-bold text-[#54321A] hover:text-[#C29336] transition">
                    <span>Is my counselling session completely confidential?</span>
                    <span class="text-stone-400 font-sans text-xl" x-text="active === 1 ? '−' : '+'">+</span>
                </button>
                <div x-show="active === 1" x-collapse class="px-5 pb-5 text-xs text-stone-600 leading-relaxed border-t border-stone-100 pt-3" style="display: none;">
                    Yes, absolutely. All counselling sessions and communications adhere strictly to professional ethical standards and strict confidentiality. No information or details are disclosed to family members, spouses, or third parties without your explicit consent.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white border border-[#E8DFD3] rounded-2xl overflow-hidden shadow-sm">
                <button type="button" @click="active = (active === 2 ? null : 2)" class="w-full p-5 text-left flex items-center justify-between gap-4 font-serif text-base font-bold text-[#54321A] hover:text-[#C29336] transition">
                    <span>Are online video/audio sessions as effective as in-person visits?</span>
                    <span class="text-stone-400 font-sans text-xl" x-text="active === 2 ? '−' : '+'">+</span>
                </button>
                <div x-show="active === 2" x-collapse class="px-5 pb-5 text-xs text-stone-600 leading-relaxed border-t border-stone-100 pt-3" style="display: none;">
                    Yes. Online consultations via encrypted video (Google Meet/Zoom) provide excellent results, maximum comfort, flexible scheduling from home, and seamless accessibility for clients worldwide (UAE, GCC, UK, US, Pan-India).
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white border border-[#E8DFD3] rounded-2xl overflow-hidden shadow-sm">
                <button type="button" @click="active = (active === 3 ? null : 3)" class="w-full p-5 text-left flex items-center justify-between gap-4 font-serif text-base font-bold text-[#54321A] hover:text-[#C29336] transition">
                    <span>What happens during the first consultation session?</span>
                    <span class="text-stone-400 font-sans text-xl" x-text="active === 3 ? '−' : '+'">+</span>
                </button>
                <div x-show="active === 3" x-collapse class="px-5 pb-5 text-xs text-stone-600 leading-relaxed border-t border-stone-100 pt-3" style="display: none;">
                    The first session is an initial intake and mapping conversation (50–60 minutes). We discuss your history, current relationship pain points or life challenges, and collaboratively establish a clear roadmap for progress.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white border border-[#E8DFD3] rounded-2xl overflow-hidden shadow-sm">
                <button type="button" @click="active = (active === 4 ? null : 4)" class="w-full p-5 text-left flex items-center justify-between gap-4 font-serif text-base font-bold text-[#54321A] hover:text-[#C29336] transition">
                    <span>How does couples counselling work if my spouse is hesitant?</span>
                    <span class="text-stone-400 font-sans text-xl" x-text="active === 4 ? '−' : '+'">+</span>
                </button>
                <div x-show="active === 4" x-collapse class="px-5 pb-5 text-xs text-stone-600 leading-relaxed border-t border-stone-100 pt-3" style="display: none;">
                    It is very common for one partner to feel uncertain at first. You can begin with an individual session to clarify relationship dynamics, after which we can gently invite your partner for a balanced, non-blaming joint exploration.
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-white border border-[#E8DFD3] rounded-2xl overflow-hidden shadow-sm">
                <button type="button" @click="active = (active === 5 ? null : 5)" class="w-full p-5 text-left flex items-center justify-between gap-4 font-serif text-base font-bold text-[#54321A] hover:text-[#C29336] transition">
                    <span>Can I attend the "Avoid Toxic Relationships" masterclass anonymously?</span>
                    <span class="text-stone-400 font-sans text-xl" x-text="active === 5 ? '−' : '+'">+</span>
                </button>
                <div x-show="active === 5" x-collapse class="px-5 pb-5 text-xs text-stone-600 leading-relaxed border-t border-stone-100 pt-3" style="display: none;">
                    Yes. Participants are welcome to keep their cameras off, use pseudonyms, and submit their questions privately through direct chat during the live Q&A section.
                </div>
            </div>
        </div>

    </div>
</section>


<!-- 8. INTERACTIVE LEAD CAPTURE & CONTACT SECTION -->
<section id="contact" class="py-16 sm:py-24 bg-[#FAF6F0] border-t border-[#E8DFD3]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Contact Info (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                <span class="badge-gold">🕊️ Get in Touch</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#54321A] tracking-tight">
                    Begin Your Path to Peace & Clarity
                </h2>
                <p class="text-sm text-stone-700 leading-relaxed">
                    Have questions about an upcoming workshop or looking to schedule a confidential session? Reach out directly via form or WhatsApp.
                </p>

                <div class="space-y-4 pt-2">
                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white border border-[#DFB254]/30 shadow-xs">
                        <div class="p-2.5 rounded-xl bg-[#FAF2DE] text-[#8C651A] shrink-0">
                            💬
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-[#54321A]">Direct WhatsApp Inquiry</h4>
                            <p class="text-xs text-stone-600 mt-0.5">Instant booking assistance with our coordinator.</p>
                            <a href="https://wa.me/918590415943?text=Hello%20Jefna%20Hameed,%20I%20would%20like%20to%20inquire%20about%20a%20counselling%20session."
                               target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-700 hover:underline mt-1">
                                Chat on WhatsApp (+91 85904 15943) →
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white border border-[#E8DFD3]">
                        <div class="p-2.5 rounded-xl bg-[#FAECF0] text-[#8B3846] shrink-0">
                            📍
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-[#54321A]">Locations & Modes</h4>
                            <p class="text-xs text-stone-600 mt-0.5">
                                • Online Video Consultations (Pan-India & Overseas)<br>
                                • In-Person Counselling Practice (Kochi & Calicut, Kerala)
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white border border-[#E8DFD3]">
                        <div class="p-2.5 rounded-xl bg-[#F5EEE6] text-[#54321A] shrink-0">
                            ✉️
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-[#54321A]">Email Inquiries</h4>
                            <p class="text-xs text-stone-600 mt-0.5">care@jefnahameed.com</p>
                        </div>
                    </div>
                </div>

                <!-- Emergency Disclaimer Reminder -->
                <div class="p-4 bg-amber-50 border border-amber-200 rounded-2xl text-[11px] text-amber-900">
                    <strong>Crisis Notice:</strong> If you are experiencing an acute crisis or thoughts of self-harm, please call 24/7 national toll-free support: <strong>KIRAN 1800-599-0019</strong> or <strong>DISHA 1056</strong>.
                </div>
            </div>

            <!-- Right Interactive Contact Form (7 cols) -->
            <div class="lg:col-span-7">
                <livewire:contact-form />
            </div>

        </div>

    </div>
</section>

@endsection
