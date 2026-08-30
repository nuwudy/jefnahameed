<div x-data="{
        currentSlide: 0,
        slides: [
            '{{ asset('images/hero-slider/jefna-portrait.webp') }}',
            '{{ asset('images/hero-slider/husband-wife-bonding.webp') }}',
            '{{ asset('images/hero-slider/sharing-emotions-class.webp') }}',
            '{{ asset('images/hero-slider/malayalam-bonding-class.webp') }}'
        ],
        timer: null,
        init() {
            this.timer = setInterval(() => {
                this.next();
            }, 4500);
        },
        pause() {
            clearInterval(this.timer);
        },
        resume() {
            this.pause();
            this.timer = setInterval(() => {
                this.next();
            }, 4500);
        },
        next() {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        },
        prev() {
            this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        }
     }"
     @mouseenter="pause()"
     @mouseleave="resume()"
     class="relative mx-auto select-none {{ $attributes->get('class', '') }}">
     
    <!-- Main Card Frame with Warm Ambient Glow (Pure 1:1 Square) -->
    <div class="relative rounded-3xl bg-[#FCFAF7] border-2 border-[#DFB254]/40 p-2 sm:p-2.5 shadow-2xl overflow-hidden group ambient-warm-glow">
        <div class="relative w-full aspect-square rounded-2xl overflow-hidden bg-[#FAF6F0] shadow-inner">
            
            <!-- 1:1 Full Uncropped Slide Images (No text overlays) -->
            <template x-for="(imageSrc, index) in slides" :key="index">
                <div x-show="currentSlide === index"
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-400"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-105"
                     class="absolute inset-0 w-full h-full flex items-center justify-center">
                    
                    <img :src="imageSrc"
                         alt="Jefna Hameed — Family Counseling & Relationship Guidance"
                         class="w-full h-full object-contain rounded-2xl"
                         loading="eager">
                </div>
            </template>

            <!-- Slider Nav Buttons (Prev / Next) -->
            <button type="button"
                    @click="prev()"
                    aria-label="Previous Slide"
                    class="absolute left-2.5 top-1/2 -translate-y-1/2 w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-[#54321A]/85 hover:bg-[#3B2110] text-[#FAF6F0] border border-[#DFB254]/50 flex items-center justify-center text-xs sm:text-sm shadow-lg transition transform hover:scale-105 active:scale-90 z-20 cursor-pointer backdrop-blur-xs">
                ❮
            </button>
            <button type="button"
                    @click="next()"
                    aria-label="Next Slide"
                    class="absolute right-2.5 top-1/2 -translate-y-1/2 w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-[#54321A]/85 hover:bg-[#3B2110] text-[#FAF6F0] border border-[#DFB254]/50 flex items-center justify-center text-xs sm:text-sm shadow-lg transition transform hover:scale-105 active:scale-90 z-20 cursor-pointer backdrop-blur-xs">
                ❯
            </button>

            <!-- Slide Pagination Indicators (Dots at bottom center) -->
            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 z-20 flex items-center gap-1.5 bg-[#3B2110]/80 backdrop-blur-sm px-3 py-1.5 rounded-full border border-[#DFB254]/40 shadow-md">
                <template x-for="(imageSrc, index) in slides" :key="index">
                    <button type="button"
                            @click="currentSlide = index"
                            class="transition-all duration-300 rounded-full cursor-pointer"
                            :class="currentSlide === index ? 'w-5 h-2 bg-[#DFB254]' : 'w-2 h-2 bg-white/50 hover:bg-white/90'"
                            :aria-label="'Go to slide ' + (index + 1)"></button>
                </template>
            </div>

        </div>
    </div>
</div>
