<header x-data="{ mobileMenuOpen: false, scrolled: false }"
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="scrolled ? 'bg-[#FAF6F0]/95 backdrop-blur-md shadow-sm border-b border-[#E8DFD3]' : 'bg-transparent border-b border-transparent'"
        class="sticky top-0 z-40 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-2xl bg-[#54321A] text-[#FAF6F0] border border-[#DFB254]/40 flex items-center justify-center font-serif text-xl font-bold shadow-sm transition-transform duration-300 group-hover:scale-105">
                    JH
                </div>
                <div>
                    <span class="block font-serif text-lg sm:text-xl font-bold text-[#54321A] leading-tight flex items-center gap-1.5">
                        <span>Jefna Hameed</span>
                        <span class="text-xs text-[#C29336]">✨</span>
                    </span>
                    <span class="block text-[11px] font-medium tracking-wider text-[#8B3846] uppercase">
                        Family Counselor & Relationship Specialist
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-6">
                <a href="{{ route('home') }}#about" class="text-sm font-medium text-stone-700 hover:text-[#54321A] transition">About</a>
                <a href="{{ route('home') }}#workshops" class="text-sm font-medium text-stone-700 hover:text-[#54321A] transition flex items-center gap-1.5">
                    <span>Workshops</span>
                    <span class="inline-flex px-1.5 py-0.5 text-[10px] font-semibold bg-[#FAECF0] text-[#8B3846] rounded-full border border-[#8B3846]/20">New</span>
                </a>
                <a href="{{ route('home') }}#counselling-services" class="text-sm font-medium text-stone-700 hover:text-[#54321A] transition">Services</a>
                <a href="{{ route('blog.index') }}" class="text-sm font-medium text-stone-700 hover:text-[#54321A] transition">Blog &amp; Insights</a>
                <a href="{{ route('media.index') }}" class="text-sm font-medium text-stone-700 hover:text-[#54321A] transition">Gallery</a>
                <a href="{{ route('home') }}#testimonials" class="text-sm font-medium text-stone-700 hover:text-[#54321A] transition">Stories</a>
                <a href="{{ route('home') }}#contact" class="text-sm font-medium text-stone-700 hover:text-[#54321A] transition">Contact</a>
            </nav>

            <!-- Action CTAs -->
            <div class="hidden sm:flex items-center gap-3">
                <button type="button"
                        @click="$dispatch('open-booking-modal')"
                        class="px-5 py-2.5 bg-[#54321A] hover:bg-[#3B2110] text-[#FAF6F0] rounded-full text-xs font-semibold tracking-wide uppercase shadow-sm transition hover:shadow-md cursor-pointer border border-[#DFB254]/30">
                    Book a Session
                </button>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="flex md:hidden">
                <button type="button"
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        class="p-2 rounded-xl text-stone-700 hover:text-[#54321A] hover:bg-stone-200/60 focus:outline-none"
                        aria-label="Toggle Navigation">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div x-show="mobileMenuOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden bg-[#FCFAF7] border-b border-[#E8DFD3] px-5 pt-3 pb-6 space-y-3 shadow-lg"
         style="display: none;">
        <a href="{{ route('home') }}#about" @click="mobileMenuOpen = false" class="block py-2 text-sm font-medium text-stone-800 hover:text-[#54321A]">About Jefna Hameed</a>
        <a href="{{ route('home') }}#workshops" @click="mobileMenuOpen = false" class="block py-2 text-sm font-medium text-stone-800 hover:text-[#54321A]">Programs &amp; Masterclasses</a>
        <a href="{{ route('home') }}#counselling-services" @click="mobileMenuOpen = false" class="block py-2 text-sm font-medium text-stone-800 hover:text-[#54321A]">Counselling Services</a>
        <a href="{{ route('blog.index') }}" @click="mobileMenuOpen = false" class="block py-2 text-sm font-medium text-stone-800 hover:text-[#54321A]">Blog &amp; Insights</a>
        <a href="{{ route('media.index') }}" @click="mobileMenuOpen = false" class="block py-2 text-sm font-medium text-stone-800 hover:text-[#54321A]">Media &amp; Gallery</a>
        <a href="{{ route('home') }}#testimonials" @click="mobileMenuOpen = false" class="block py-2 text-sm font-medium text-stone-800 hover:text-[#54321A]">Client Stories</a>
        <a href="{{ route('home') }}#contact" @click="mobileMenuOpen = false" class="block py-2 text-sm font-medium text-stone-800 hover:text-[#54321A]">Contact &amp; Location</a>
        <div class="pt-3 border-t border-stone-200 flex flex-col gap-2">
            <button type="button"
                    @click="mobileMenuOpen = false; $dispatch('open-booking-modal')"
                    class="w-full py-3 bg-[#54321A] text-white rounded-xl text-xs font-semibold uppercase tracking-wider text-center shadow-sm">
                Book a Session
            </button>
            <a href="https://wa.me/918590415943?text=Hello%20Jefna%20Hameed,%20I%20would%20like%20to%20inquire%20about%20a%20counselling%20session."
               target="_blank" rel="noopener noreferrer"
               class="w-full py-2.5 bg-[#25D366] text-white rounded-xl text-xs font-semibold text-center flex items-center justify-center gap-2">
                WhatsApp Inquiry
            </a>
        </div>
    </div>
</header>
