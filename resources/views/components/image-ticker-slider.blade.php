@props([
    'title' => 'Real Relationship Transformations & Honeymoon Moments',
    'subtitle' => 'From turbulent divorce talks to deeply fulfilling, peaceful family life across Kerala and worldwide.'
])

<div class="py-8 sm:py-12 bg-gradient-to-b from-[#FAF6F0] via-[#FAF2DE]/50 to-[#FAF6F0] border-y border-[#DFB254]/30 overflow-hidden relative"
     x-data="{
         isPaused: false,
         activeModalImg: null,
         activeModalTitle: '',
         activeModalCaption: '',
         openLightbox(img, title, caption) {
             this.activeModalImg = img;
             this.activeModalTitle = title;
             this.activeModalCaption = caption;
         },
         closeLightbox() {
             this.activeModalImg = null;
         }
     }">

    <!-- Section Heading -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-6 text-center">
        <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/90 border border-[#DFB254]/40 text-[#8C651A] text-xs font-semibold uppercase tracking-wider mb-2 shadow-xs">
            <span class="animate-cute-throb">💖</span>
            <span>Client Transformation Journey</span>
            <span>✨</span>
        </div>
        <h2 class="font-serif text-2xl sm:text-3xl font-bold text-[#54321A]">{{ $title }}</h2>
        <p class="text-xs sm:text-sm text-stone-600 max-w-2xl mx-auto mt-1">{{ $subtitle }}</p>
    </div>

    <!-- Infinite Scrolling Image Ticker Track -->
    <div class="relative w-full overflow-hidden py-3"
         @mouseenter="isPaused = true"
         @mouseleave="isPaused = false">
        
        <!-- Gradient Edge Fades for Smooth Illusion -->
        <div class="absolute left-0 top-0 bottom-0 w-16 sm:w-32 bg-gradient-to-r from-[#FAF6F0] to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-16 sm:w-32 bg-gradient-to-l from-[#FAF6F0] to-transparent z-10 pointer-events-none"></div>

        <div class="flex items-center gap-5 sm:gap-6 animate-image-ticker w-max"
             :style="isPaused ? 'animation-play-state: paused;' : ''">
            
            @php
                $slides = [
                    [
                        'img' => asset('images/gallery/family-court-reconciliation.webp'),
                        'badge' => '💍 Reclaimed Marriage',
                        'badge_color' => 'bg-[#FAF2DE] text-[#8C651A] border-[#DFB254]/40',
                        'title' => 'From Family Court to Reunited Bond',
                        'caption' => 'Overcoming divorce talks with compassionate guidance, stepping out hand-in-hand.',
                    ],
                    [
                        'img' => asset('images/gallery/sunset-cliff-honeymoon.webp'),
                        'badge' => '🌅 Honeymoon Moments',
                        'badge_color' => 'bg-[#FAECF0] text-[#8B3846] border-[#8B3846]/30',
                        'title' => 'Sunset Intimacy by the Ocean',
                        'caption' => 'Restoring emotional transparency and honeymoon warmth overlooking the sea.',
                    ],
                    [
                        'img' => asset('images/gallery/luxury-resort-connection.webp'),
                        'badge' => '☕ Quality Reconnection',
                        'badge_color' => 'bg-[#FAF2DE] text-[#8C651A] border-[#DFB254]/40',
                        'title' => 'Resort Sanctuary & Shared Joy',
                        'caption' => 'Learning to hold hands and communicate without fear or resentment.',
                    ],
                    [
                        'img' => asset('images/gallery/kovalam-beach-celebration.webp'),
                        'badge' => '🌴 Beachside Harmony',
                        'badge_color' => 'bg-[#FAECF0] text-[#8B3846] border-[#8B3846]/30',
                        'title' => 'Celebration of True Partnership',
                        'caption' => 'Walking together in joy with family blessings and inner confidence.',
                    ],
                    [
                        'img' => asset('images/gallery/loving-family-home.webp'),
                        'badge' => '🏡 Peaceful Family Home',
                        'badge_color' => 'bg-emerald-50 text-emerald-800 border-emerald-200',
                        'title' => 'Loving & Secure Family Life',
                        'caption' => 'Creating an emotionally safe, peaceful home environment for children and parents.',
                    ],
                ];
            @endphp

            <!-- Set 1 of Slides -->
            @foreach($slides as $slide)
                <div class="group relative w-72 sm:w-80 md:w-96 aspect-[16/10] rounded-3xl overflow-hidden bg-stone-900 border-2 border-[#DFB254]/40 shadow-lg cursor-pointer transition-all duration-500 hover:scale-[1.03] hover:shadow-2xl hover:border-[#C29336] shrink-0"
                     @click="openLightbox('{{ $slide['img'] }}', '{{ addslashes($slide['title']) }}', '{{ addslashes($slide['caption']) }}')">
                    
                    <!-- Background Image -->
                    <img src="{{ $slide['img'] }}"
                         alt="{{ $slide['title'] }}"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                         loading="lazy">
                    
                    <!-- Gradient Vignette Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#2B1B10]/95 via-[#2B1B10]/30 to-transparent"></div>

                    <!-- Top Badge -->
                    <div class="absolute top-3.5 left-3.5 z-10">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold tracking-wider uppercase border shadow-md {{ $slide['badge_color'] }} backdrop-blur-md">
                            {{ $slide['badge'] }}
                        </span>
                    </div>

                    <!-- Bottom Content Overlay -->
                    <div class="absolute inset-x-0 bottom-0 p-4 text-white z-10">
                        <h4 class="font-serif text-sm sm:text-base font-bold leading-tight group-hover:text-[#DFB254] transition">
                            {{ $slide['title'] }}
                        </h4>
                        <p class="text-[11px] text-stone-300 mt-1 line-clamp-1 leading-snug">
                            {{ $slide['caption'] }}
                        </p>
                        <div class="flex items-center gap-1 text-[10px] text-[#DFB254] font-semibold mt-1.5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>Click to view full moment</span> →
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Set 2 (Duplicate for Seamless Infinite Loop) -->
            @foreach($slides as $slide)
                <div class="group relative w-72 sm:w-80 md:w-96 aspect-[16/10] rounded-3xl overflow-hidden bg-stone-900 border-2 border-[#DFB254]/40 shadow-lg cursor-pointer transition-all duration-500 hover:scale-[1.03] hover:shadow-2xl hover:border-[#C29336] shrink-0"
                     @click="openLightbox('{{ $slide['img'] }}', '{{ addslashes($slide['title']) }}', '{{ addslashes($slide['caption']) }}')">
                    
                    <img src="{{ $slide['img'] }}"
                         alt="{{ $slide['title'] }}"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                         loading="lazy">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-[#2B1B10]/95 via-[#2B1B10]/30 to-transparent"></div>

                    <div class="absolute top-3.5 left-3.5 z-10">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-bold tracking-wider uppercase border shadow-md {{ $slide['badge_color'] }} backdrop-blur-md">
                            {{ $slide['badge'] }}
                        </span>
                    </div>

                    <div class="absolute inset-x-0 bottom-0 p-4 text-white z-10">
                        <h4 class="font-serif text-sm sm:text-base font-bold leading-tight group-hover:text-[#DFB254] transition">
                            {{ $slide['title'] }}
                        </h4>
                        <p class="text-[11px] text-stone-300 mt-1 line-clamp-1 leading-snug">
                            {{ $slide['caption'] }}
                        </p>
                        <div class="flex items-center gap-1 text-[10px] text-[#DFB254] font-semibold mt-1.5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span>Click to view full moment</span> →
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Quick Callout Pill Below Slider -->
    <div class="max-w-7xl mx-auto px-4 text-center mt-5">
        <a href="{{ route('media.index') }}" class="inline-flex items-center gap-2 text-xs font-semibold text-[#54321A] hover:text-[#8B3846] transition">
            <span>Explore All Client Stories & Media Gallery</span>
            <span class="text-sm">→</span>
        </a>
    </div>

    <!-- Lightbox Modal -->
    <template x-if="activeModalImg">
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/85 backdrop-blur-md"
             @click.self="closeLightbox()"
             @keydown.escape.window="closeLightbox()">
            
            <div class="relative max-w-4xl w-full bg-[#1F140D] border border-[#DFB254]/50 rounded-3xl overflow-hidden shadow-2xl animate-in fade-in zoom-in-95 duration-200">
                <!-- Close Button -->
                <button type="button"
                        @click="closeLightbox()"
                        class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-black/60 hover:bg-black text-white flex items-center justify-center transition border border-white/20">
                    ✕
                </button>

                <!-- Modal Image Container -->
                <div class="relative aspect-[16/10] sm:aspect-[16/9] w-full bg-black overflow-hidden">
                    <img :src="activeModalImg" :alt="activeModalTitle" class="w-full h-full object-contain">
                </div>

                <!-- Modal Footer Details -->
                <div class="p-6 bg-[#2B1B10] border-t border-[#DFB254]/30 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <span class="text-[10px] font-bold tracking-wider uppercase text-[#DFB254]">Relationship Transformation</span>
                        <h3 class="font-serif text-xl font-bold text-white mt-0.5" x-text="activeModalTitle"></h3>
                        <p class="text-xs text-stone-300 mt-1 max-w-xl" x-text="activeModalCaption"></p>
                    </div>

                    <div class="shrink-0 flex items-center gap-3">
                        <button type="button"
                                @click="closeLightbox(); $dispatch('open-booking-modal')"
                                class="px-5 py-2.5 bg-[#54321A] hover:bg-[#3B2110] text-[#FAF6F0] border border-[#DFB254]/40 font-semibold text-xs rounded-xl shadow-md transition">
                            Book Similar Guidance 💍
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </template>

</div>
