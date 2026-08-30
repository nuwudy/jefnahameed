@extends('layouts.app')

@section('title', 'Jefna Hameed | Clinical Psychologist & Relationship Guidance')
@section('meta_description', 'Break Free from Toxic Patterns. Reclaim Your Self-Worth. Compassionate, confidential clinical psychology and couple counselling with Jefna Hameed.')

@section('content')

<!-- 1. HERO SECTION -->
<section class="relative overflow-hidden pt-8 pb-16 lg:pt-14 lg:pb-24 botanical-pattern">
    <!-- Subtle Ambient Glows -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-[#3B4E3B]/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/3 right-10 w-[300px] h-[300px] bg-[#7A3528]/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Copy Column (7 cols) -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- Badge Pill -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#EEF3ED] border border-[#3B4E3B]/20 text-[#3B4E3B] text-xs font-semibold tracking-wider uppercase">
                    <span class="w-2 h-2 rounded-full bg-[#3B4E3B]"></span>
                    Clinical Psychology & Relationship Guidance
                </div>

                <!-- Primary Headline -->
                <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-[#3B4E3B] tracking-tight leading-[1.15]">
                    Break Free from Toxic Patterns. <br class="hidden sm:inline" />
                    <span class="italic font-normal text-[#7A3528]">Reclaim Your Self-Worth.</span>
                </h1>

                <!-- Subheadline with Malayalam subtle nuance -->
                <p class="text-base sm:text-lg text-stone-700 font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Empathetic, evidence-based psychological counselling and masterclasses. Helping individuals break free from emotional manipulation, set guilt-free boundaries, and rebuild thriving, peaceful relationships.
                </p>
                <p class="text-xs sm:text-sm text-stone-600 font-serif italic max-w-xl mx-auto lg:mx-0 border-l-2 border-[#7A3528] pl-3 py-1">
                    "ഭാര്യയും ഭർത്താവും — സ്നേഹം മനസ്സിലാക്കുമ്പോൾ ജീവിതം മനോഹരമാവും. ശാസ്ത്രീയമായ കൗൺസിലിംഗിലൂടെ സന്തോഷമുള്ള ബന്ധങ്ങൾ കെട്ടിപ്പടുക്കാം."
                </p>

                <!-- CTA Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    <button type="button"
                            @click="$dispatch('open-booking-modal')"
                            class="w-full sm:w-auto px-8 py-4 bg-[#3B4E3B] hover:bg-[#2A382A] text-white font-medium text-sm rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2 cursor-pointer">
                        <span>Book a Confidential Session</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                    <a href="#workshops"
                       class="w-full sm:w-auto px-7 py-4 bg-[#FAF8F5] hover:bg-white text-[#7A3528] border border-[#7A3528]/30 font-medium text-sm rounded-2xl shadow-sm hover:shadow transition text-center flex items-center justify-center gap-2">
                        <span>Explore Masterclasses</span>
                        <span class="inline-flex px-2 py-0.5 text-[10px] font-bold bg-[#FAF0EE] text-[#7A3528] rounded-full">New</span>
                    </a>
                </div>

                <!-- Trust Badges Strip -->
                <div class="pt-6 border-t border-stone-200/80 flex flex-wrap items-center justify-center lg:justify-start gap-x-6 gap-y-3 text-xs text-stone-600">
                    <div class="flex items-center gap-2">
                        <span class="text-emerald-700">🔒</span>
                        <span>100% Patient Confidentiality</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-emerald-700">🌿</span>
                        <span>Evidence-Based Clinical Frameworks</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-emerald-700">🌍</span>
                        <span>Online Worldwide & Kerala Clinics</span>
                    </div>
                </div>
            </div>

            <!-- Right Visual Portrait Presentation Column (5 cols) -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <!-- Main Card Frame -->
                    <div class="relative rounded-3xl bg-[#FAF8F5] border border-stone-200 p-4 shadow-xl overflow-hidden">
                        <div class="relative aspect-[4/5] rounded-2xl overflow-hidden bg-gradient-to-b from-[#3B4E3B]/10 to-[#FAF0EE]">
                            
                            <!-- Stylized Aesthetic Portrait Canvas -->
                            <div class="w-full h-full flex flex-col items-center justify-between p-8 text-center relative z-10">
                                <!-- Top Botanical Leaf SVG -->
                                <div class="w-16 h-16 rounded-full bg-[#3B4E3B]/10 flex items-center justify-center text-[#3B4E3B] mb-2">
                                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v18m0-18C8.5 7.5 6 12 6 18c6 0 10.5-2.5 12-6 0-6-2.5-10.5-6-12z"/>
                                    </svg>
                                </div>

                                <div class="my-auto space-y-3">
                                    <div class="w-28 h-28 rounded-full bg-[#3B4E3B] text-[#F7F3EE] flex items-center justify-center font-serif text-4xl font-bold mx-auto shadow-md border-4 border-white">
                                        JH
                                    </div>
                                    <div>
                                        <h3 class="font-serif text-2xl font-bold text-[#3B4E3B]">Jefna Hameed</h3>
                                        <p class="text-xs font-semibold uppercase tracking-widest text-[#7A3528] mt-0.5">Clinical Psychologist</p>
                                        <p class="text-xs text-stone-600 mt-1">Specialist in Relationship Healing & Family Dynamics</p>
                                    </div>
                                </div>

                                <div class="w-full bg-white/85 backdrop-blur-sm border border-stone-200/80 rounded-xl p-3 text-left">
                                    <p class="text-[11px] font-medium text-stone-600 italic">
                                        "Healing begins when you create space for honesty, self-respect, and emotional safety."
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Credential Card - Top Left -->
                        <div class="absolute -top-3 -left-3 glass-panel px-4 py-2.5 rounded-2xl shadow-lg border border-stone-200/80 flex items-center gap-2.5">
                            <div class="w-8 h-8 rounded-full bg-[#FAF0EE] text-[#7A3528] flex items-center justify-center text-sm font-bold">
                                🎓
                            </div>
                            <div>
                                <p class="text-[11px] font-bold text-stone-800">M.Sc Clinical Psychology</p>
                                <p class="text-[10px] text-stone-500">Certified Practitioner</p>
                            </div>
                        </div>

                        <!-- Floating Stats Card - Bottom Right -->
                        <div class="absolute -bottom-3 -right-3 glass-panel px-4 py-2.5 rounded-2xl shadow-lg border border-stone-200/80 flex items-center gap-2.5">
                            <div class="w-8 h-8 rounded-full bg-[#EEF3ED] text-[#3B4E3B] flex items-center justify-center text-sm font-bold">
                                ⭐
                            </div>
                            <div>
                                <p class="text-[11px] font-bold text-stone-800">1,500+ Sessions</p>
                                <p class="text-[10px] text-stone-500">Empathetic Guidance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- 2. FEATURED MASTERCLASS SECTION -->
<section id="workshops" class="py-16 sm:py-24 bg-[#FAF8F5] border-y border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="badge-terracotta mb-3">Live Interactive Masterclass</span>
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-[#3B4E3B] tracking-tight">
                "Avoid Toxic Relationships"
            </h2>
            <p class="text-base text-stone-700 mt-3 leading-relaxed">
                A structured psychological masterclass specifically curated for women to recognize subtle emotional manipulation, establish unshakeable boundaries, and heal with confidence.
            </p>
        </div>

        <!-- Featured Card Container -->
        <div class="bg-white border border-stone-200/90 rounded-3xl p-6 sm:p-10 shadow-md">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
                
                <!-- Left: Workshop Details & Curriculum (7 cols) -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#EEF3ED] text-[#3B4E3B]">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            2.5 Hours Live + 30 Mins Confidential Q&A
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-stone-100 text-stone-700">
                            🌐 Malayalam & English (Bilingual)
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#FAF0EE] text-[#7A3528]">
                            💻 Live Private Zoom
                        </span>
                    </div>

                    <h3 class="font-serif text-2xl font-bold text-stone-900">
                        What You Will Master in this Masterclass:
                    </h3>

                    <!-- Curriculum List -->
                    <div class="space-y-4">
                        @if(!empty($featuredWorkshop->curriculum))
                            @foreach($featuredWorkshop->curriculum as $index => $item)
                                <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-[#FAF8F5] border border-stone-200/60 transition hover:border-[#3B4E3B]/30">
                                    <div class="w-7 h-7 rounded-xl bg-[#3B4E3B] text-white flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">
                                        {{ $index + 1 }}
                                    </div>
                                    <div>
                                        <h4 class="text-sm font-semibold text-stone-900">{{ $item['title'] }}</h4>
                                        <p class="text-xs text-stone-600 mt-0.5 leading-relaxed">{{ $item['desc'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="p-4 bg-stone-50 rounded-xl text-xs text-stone-600">Curriculum details updating shortly.</div>
                        @endif
                    </div>

                    <!-- Takeaways / Bonuses -->
                    <div class="pt-4 border-t border-stone-200 grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-stone-700">
                        <div class="flex items-center gap-2">
                            <span class="text-[#3B4E3B] font-bold">✓</span>
                            <span>Downloadable Boundary Script Cheatsheet</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-[#3B4E3B] font-bold">✓</span>
                            <span>Confidential Anonymous Q&A Session</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-[#3B4E3B] font-bold">✓</span>
                            <span>Lifetime Self-Worth Recovery Guide</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-[#3B4E3B] font-bold">✓</span>
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
<section id="counselling-services" class="py-16 sm:py-24 bg-[#F7F3EE]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="badge-olive mb-3">Clinical Specializations</span>
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-[#3B4E3B] tracking-tight">
                Counselling & Psychological Services
            </h2>
            <p class="text-base text-stone-700 mt-3 leading-relaxed">
                Evidence-based psychotherapy tailored for couples, individuals, and families seeking emotional clarity, mutual understanding, and durable healing.
            </p>
        </div>

        <!-- 3-Column Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="bg-white border border-stone-200 rounded-3xl p-7 shadow-sm flex flex-col justify-between card-hover-lift">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="badge-olive">{{ $service['badge'] }}</span>
                            <div class="w-10 h-10 rounded-2xl bg-[#FAF8F5] border border-stone-200 flex items-center justify-center text-[#3B4E3B]">
                                @if($service['icon'] === 'couple')
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                @elseif($service['icon'] === 'therapy')
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                    </svg>
                                @else
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                @endif
                            </div>
                        </div>

                        <div>
                            <h3 class="font-serif text-xl font-bold text-stone-900 mb-1">{{ $service['title'] }}</h3>
                            <p class="text-xs font-serif italic text-[#7A3528] mb-2">{{ $service['malayalam_title'] }}</p>
                            <p class="text-xs text-stone-600 leading-relaxed">{{ $service['description'] }}</p>
                        </div>

                        <!-- Benefits Checklist -->
                        <div class="pt-3 border-t border-stone-100 space-y-2">
                            @foreach($service['benefits'] as $b)
                                <div class="flex items-center gap-2 text-xs text-stone-700">
                                    <span class="text-[#3B4E3B] font-bold">✓</span>
                                    <span>{{ $b }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="pt-6 mt-6 border-t border-stone-100">
                        <button type="button"
                                @click="$dispatch('open-booking-modal', { service: '{{ $service['title'] }}' })"
                                class="w-full py-2.5 bg-[#FAF8F5] hover:bg-[#3B4E3B] text-[#3B4E3B] hover:text-white border border-[#3B4E3B]/20 text-xs font-semibold rounded-xl transition shadow-sm cursor-pointer">
                            Book {{ $service['title'] }}
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>


<!-- 4. ABOUT THE PSYCHOLOGIST -->
<section id="about" class="py-16 sm:py-24 bg-[#FAF8F5] border-y border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Bio Card Presentation (5 cols) -->
            <div class="lg:col-span-5">
                <div class="bg-white border border-stone-200 rounded-3xl p-6 sm:p-8 shadow-md relative">
                    <div class="w-20 h-20 rounded-2xl bg-[#3B4E3B] text-[#F7F3EE] flex items-center justify-center font-serif text-3xl font-bold mb-4">
                        JH
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-[#3B4E3B]">Jefna Hameed</h3>
                    <p class="text-xs font-semibold text-[#7A3528] uppercase tracking-wider mt-0.5">M.Sc Clinical Psychology • Family Counselor</p>
                    
                    <div class="mt-4 pt-4 border-t border-stone-100 space-y-2.5 text-xs text-stone-600">
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-700">✓</span>
                            <span>Specialized in Relationship Trauma & Family Systems</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-700">✓</span>
                            <span>Certified Cognitive Behavioral Therapy (CBT) Practitioner</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-700">✓</span>
                            <span>Experienced in Cross-Cultural & NRI Family Dynamics</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-emerald-700">✓</span>
                            <span>Bilingual Sessions in Malayalam & English</span>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-stone-100 flex items-center justify-between">
                        <span class="text-xs text-stone-500">Kochi • Calicut • Worldwide</span>
                        <a href="https://wa.me/919400000000" target="_blank" class="text-xs font-semibold text-[#3B4E3B] hover:underline flex items-center gap-1">
                            <span>Direct Inquiry</span> →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Biography & Approach (7 cols) -->
            <div class="lg:col-span-7 space-y-6">
                <span class="badge-olive">About the Psychologist</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#3B4E3B] tracking-tight">
                    Compassionate, Confidential & Grounded in Clinical Science
                </h2>
                
                <!-- Prominent Blockquote Callout -->
                <div class="bg-[#FAF0EE] border-l-4 border-[#7A3528] p-5 rounded-r-2xl">
                    <p class="font-serif text-lg sm:text-xl font-medium text-[#7A3528] italic">
                        "A healthy relationship adds value to your life, not drains you."
                    </p>
                    <p class="text-xs text-stone-600 mt-1">— Jefna Hameed, Clinical Psychologist</p>
                </div>

                <p class="text-sm text-stone-700 leading-relaxed">
                    With extensive experience in clinical psychology and family counseling, Jefna Hameed helps individuals and couples dismantle dysfunctional patterns, heal from toxic relationships, and build emotionally secure lives.
                </p>
                <p class="text-sm text-stone-700 leading-relaxed">
                    Whether you are struggling with recurring conflicts in your marriage, recovering from manipulative dynamics, or seeking the courage to set firm personal boundaries, therapy provides a structured, non-judgmental space to gain clarity and self-respect.
                </p>

                <!-- Core Pillars -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-2xl bg-white border border-stone-200/80">
                        <h4 class="text-xs font-bold text-[#3B4E3B] uppercase tracking-wider mb-1">Empathetic Safe Container</h4>
                        <p class="text-xs text-stone-600">Zero judgment. Complete freedom to express emotions at your own pace.</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-white border border-stone-200/80">
                        <h4 class="text-xs font-bold text-[#3B4E3B] uppercase tracking-wider mb-1">Practical Frameworks</h4>
                        <p class="text-xs text-stone-600">Actionable scripts and worksheets to handle real-life conflicts smoothly.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- 5. WHY CHOOSE CLINICAL THERAPY -->
<section id="why-therapy" class="py-16 sm:py-24 bg-[#F7F3EE]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="badge-terracotta mb-3">The Clinical Difference</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#3B4E3B] tracking-tight">
                Why Professional Clinical Guidance Matters
            </h2>
            <p class="text-base text-stone-700 mt-3 leading-relaxed">
                Why casual social media tips and well-meaning friends cannot replace structured psychological therapy.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- Unstructured Casual Advice -->
            <div class="bg-white/80 border border-stone-200 rounded-3xl p-6 sm:p-8 space-y-4">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-rose-50 text-rose-700 border border-rose-200">
                    ✕ Casual Advice / Unstructured Guidance
                </div>
                <h3 class="font-serif text-lg font-bold text-stone-800">Temporary Band-Aids</h3>
                <ul class="space-y-3 text-xs text-stone-600">
                    <li class="flex items-start gap-2">
                        <span class="text-rose-500 font-bold">✕</span>
                        <span>Biased perspectives that often escalate misunderstandings and blame.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-rose-500 font-bold">✕</span>
                        <span>Superficial advice like "just compromise" without addressing underlying trauma.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-rose-500 font-bold">✕</span>
                        <span>Normalizing emotional abuse and boundary violations under guilt or social pressure.</span>
                    </li>
                </ul>
            </div>

            <!-- Structured Clinical Therapy -->
            <div class="bg-[#EEF3ED]/70 border border-[#3B4E3B]/30 rounded-3xl p-6 sm:p-8 space-y-4 shadow-sm">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-[#3B4E3B] text-white">
                    ✓ Clinical Psychology with Jefna Hameed
                </div>
                <h3 class="font-serif text-lg font-bold text-[#3B4E3B]">Deep, Sustainable Transformation</h3>
                <ul class="space-y-3 text-xs text-stone-700">
                    <li class="flex items-start gap-2">
                        <span class="text-emerald-700 font-bold">✓</span>
                        <span>Neutral, objective psychological space where root neurological and relational triggers are resolved.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-emerald-700 font-bold">✓</span>
                        <span>Evidence-based CBT and systemic communication frameworks tailored to your unique dynamic.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-emerald-700 font-bold">✓</span>
                        <span>Empowering you with boundaries, self-worth, and emotional autonomy that lasts a lifetime.</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>


<!-- 6. TESTIMONIALS & CLIENT STORIES -->
<section id="testimonials" class="py-16 sm:py-24 bg-[#FAF8F5] border-y border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="badge-olive mb-3">Client Stories</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#3B4E3B] tracking-tight">
                Transformation & Healing Journeys
            </h2>
            <p class="text-base text-stone-700 mt-3 leading-relaxed">
                Real reflections from individuals and couples who took the courageous step to seek clarity and peace.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($testimonials as $t)
                <div class="bg-white border border-stone-200 rounded-3xl p-6 shadow-sm flex flex-col justify-between card-hover-lift">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">
                                @for($i = 0; $i < $t->rating; $i++)
                                    ★
                                @endfor
                            </div>
                            <span class="text-[10px] uppercase font-semibold px-2 py-0.5 rounded-full bg-[#EEF3ED] text-[#3B4E3B]">
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
                        <h4 class="text-xs font-bold text-stone-900">{{ $t->client_name }}</h4>
                        <p class="text-[11px] text-[#7A3528] font-medium">{{ $t->client_tag }}</p>
                        <p class="text-[10px] text-stone-400 mt-0.5">{{ $t->location }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>


<!-- 7. INTERACTIVE FAQ ACCORDION -->
<section id="faq" class="py-16 sm:py-24 bg-[#F7F3EE]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{ active: null }">
        
        <div class="text-center mb-14">
            <span class="badge-olive mb-3">Frequently Asked Questions</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#3B4E3B] tracking-tight">
                Everything You Need to Know
            </h2>
            <p class="text-sm text-stone-600 mt-2">Clear answers about privacy, session format, and therapy outcomes.</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm">
                <button type="button" @click="active = (active === 1 ? null : 1)" class="w-full p-5 text-left flex items-center justify-between gap-4 font-serif text-base font-bold text-stone-900 hover:text-[#3B4E3B] transition">
                    <span>Is my therapy session completely confidential?</span>
                    <span class="text-stone-400 font-sans text-xl" x-text="active === 1 ? '−' : '+'">+</span>
                </button>
                <div x-show="active === 1" x-collapse class="px-5 pb-5 text-xs text-stone-600 leading-relaxed border-t border-stone-100 pt-3" style="display: none;">
                    Yes, absolutely. All therapy sessions and records adhere strictly to clinical ethical guidelines and patient confidentiality. No information or details are disclosed to family members, spouses, or third parties without your explicit written consent.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm">
                <button type="button" @click="active = (active === 2 ? null : 2)" class="w-full p-5 text-left flex items-center justify-between gap-4 font-serif text-base font-bold text-stone-900 hover:text-[#3B4E3B] transition">
                    <span>Are online video/audio sessions as effective as in-person visits?</span>
                    <span class="text-stone-400 font-sans text-xl" x-text="active === 2 ? '−' : '+'">+</span>
                </button>
                <div x-show="active === 2" x-collapse class="px-5 pb-5 text-xs text-stone-600 leading-relaxed border-t border-stone-100 pt-3" style="display: none;">
                    Yes. Clinical studies consistently prove that tele-psychology via encrypted video (Google Meet/Zoom) delivers equivalent therapeutic outcomes. It offers maximum comfort, flexible scheduling from home, and accessibility for clients worldwide (UAE, UK, US, Pan-India).
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm">
                <button type="button" @click="active = (active === 3 ? null : 3)" class="w-full p-5 text-left flex items-center justify-between gap-4 font-serif text-base font-bold text-stone-900 hover:text-[#3B4E3B] transition">
                    <span>What happens during the first consultation session?</span>
                    <span class="text-stone-400 font-sans text-xl" x-text="active === 3 ? '−' : '+'">+</span>
                </button>
                <div x-show="active === 3" x-collapse class="px-5 pb-5 text-xs text-stone-600 leading-relaxed border-t border-stone-100 pt-3" style="display: none;">
                    The first session is an initial clinical intake and mapping conversation (50–60 minutes). We discuss your history, current relationship or emotional pain points, and collaboratively establish clear goals for your therapeutic roadmap.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm">
                <button type="button" @click="active = (active === 4 ? null : 4)" class="w-full p-5 text-left flex items-center justify-between gap-4 font-serif text-base font-bold text-stone-900 hover:text-[#3B4E3B] transition">
                    <span>How does couples counselling work if my spouse is hesitant?</span>
                    <span class="text-stone-400 font-sans text-xl" x-text="active === 4 ? '−' : '+'">+</span>
                </button>
                <div x-show="active === 4" x-collapse class="px-5 pb-5 text-xs text-stone-600 leading-relaxed border-t border-stone-100 pt-3" style="display: none;">
                    It is very common for one partner to feel uncertain at first. You can begin with an individual session to clarify relationship dynamics, after which we can gently invite your partner for a balanced, non-blaming joint exploration.
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm">
                <button type="button" @click="active = (active === 5 ? null : 5)" class="w-full p-5 text-left flex items-center justify-between gap-4 font-serif text-base font-bold text-stone-900 hover:text-[#3B4E3B] transition">
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
<section id="contact" class="py-16 sm:py-24 bg-[#FAF8F5] border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Contact Info (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                <span class="badge-olive">Get in Touch</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-[#3B4E3B] tracking-tight">
                    Begin Your Path to Peace & Clarity
                </h2>
                <p class="text-sm text-stone-700 leading-relaxed">
                    Have questions about an upcoming workshop or looking to schedule a confidential consultation? Reach out directly via form or WhatsApp.
                </p>

                <div class="space-y-4 pt-2">
                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white border border-stone-200">
                        <div class="p-2.5 rounded-xl bg-[#EEF3ED] text-[#3B4E3B] shrink-0">
                            💬
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-stone-900">Direct WhatsApp Inquiry</h4>
                            <p class="text-xs text-stone-600 mt-0.5">Instant booking assistance with our clinical coordinator.</p>
                            <a href="https://wa.me/919400000000?text=Hello%20Jefna%20Hameed,%20I%20would%20like%20to%20inquire%20about%20a%20therapy%20session."
                               target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-1.5 text-xs font-semibold text-emerald-700 hover:underline mt-1">
                                Chat on WhatsApp (+91 94000 00000) →
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white border border-stone-200">
                        <div class="p-2.5 rounded-xl bg-[#FAF0EE] text-[#7A3528] shrink-0">
                            📍
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-stone-900">Locations & Modes</h4>
                            <p class="text-xs text-stone-600 mt-0.5">
                                • Online Video Consultations (Pan-India & Overseas)<br>
                                • In-Person Clinical Practice (Kochi & Calicut, Kerala)
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white border border-stone-200">
                        <div class="p-2.5 rounded-xl bg-stone-100 text-stone-800 shrink-0">
                            ✉️
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-stone-900">Email Inquiries</h4>
                            <p class="text-xs text-stone-600 mt-0.5">care@jefnahameed.com</p>
                        </div>
                    </div>
                </div>

                <!-- Emergency Disclaimer Reminder -->
                <div class="p-4 bg-amber-50 border border-amber-200 rounded-2xl text-[11px] text-amber-900">
                    <strong>Crisis Notice:</strong> If you are experiencing an acute psychological crisis or thoughts of self-harm, please call 24/7 national toll-free support: <strong>KIRAN 1800-599-0019</strong> or <strong>DISHA 1056</strong>.
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
