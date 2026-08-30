<footer class="bg-[#2C1C12] text-stone-300 pt-16 pb-12 border-t border-[#54321A]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Crisis Helplines Banner Box in Footer -->
        <div class="bg-[#1F140D] border border-[#DFB254]/30 rounded-2xl p-5 mb-12 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <div class="flex items-start gap-3">
                <div class="p-2 rounded-xl bg-[#DFB254]/15 text-[#DFB254] mt-0.5 shrink-0">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </div>
                <div>
                    <h5 class="text-sm font-semibold text-amber-200">Mental Health Crisis & Emergency Support</h5>
                    <p class="text-xs text-stone-400 mt-0.5 leading-relaxed">
                        If you or someone you know is in immediate crisis or experiencing thoughts of self-harm, please contact national 24/7 emergency toll-free support helplines immediately.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap gap-2 text-xs font-medium shrink-0">
                <span class="px-3 py-1.5 rounded-lg bg-stone-900 text-amber-300 border border-stone-800">KIRAN: 1800-599-0019</span>
                <span class="px-3 py-1.5 rounded-lg bg-stone-900 text-amber-300 border border-stone-800">Tele-MANAS: 14416</span>
                <span class="px-3 py-1.5 rounded-lg bg-stone-900 text-amber-300 border border-stone-800">DISHA: 1056</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-stone-800/80">
            <!-- Brand Column -->
            <div class="lg:col-span-2 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-[#FAF6F0] text-[#54321A] border border-[#DFB254]/40 flex items-center justify-center font-serif text-lg font-bold">
                        JH
                    </div>
                    <div>
                        <h4 class="font-serif text-xl font-bold text-white flex items-center gap-1.5">
                            <span>Jefna Hameed</span>
                            <span class="text-xs text-[#DFB254]">✨</span>
                        </h4>
                        <p class="text-xs text-stone-400 font-sans uppercase tracking-wider">Family Counselor & Relationship Specialist</p>
                    </div>
                </div>
                <p class="text-xs text-stone-400 leading-relaxed pr-6">
                    Dedicated to providing empathetic, evidence-based relationship counselling and family frameworks. Helping individuals and couples build healthy boundaries, heal from emotional strain, and nurture meaningful, lasting bonds.
                </p>
                <div class="pt-2">
                    <p class="text-xs text-stone-400 mb-2 font-medium">Subscribe for Mindful Notes & Workshop Announcements:</p>
                    <livewire:newsletter-form />
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h5 class="text-xs font-semibold text-white uppercase tracking-wider mb-4">Quick Links</h5>
                <ul class="space-y-2.5 text-xs text-stone-400">
                    <li><a href="{{ route('home') }}#about" class="hover:text-[#DFB254] transition">About Jefna Hameed</a></li>
                    <li><a href="{{ route('home') }}#workshops" class="hover:text-[#DFB254] transition">Toxic Relationship Masterclass</a></li>
                    <li><a href="{{ route('home') }}#counselling-services" class="hover:text-[#DFB254] transition">Counselling Services</a></li>
                    <li><a href="{{ route('blog.index') }}" class="hover:text-[#DFB254] transition">Relationship Blog &amp; Insights</a></li>
                    <li><a href="{{ route('media.index') }}" class="hover:text-[#DFB254] transition">Media &amp; Video Gallery</a></li>
                    <li><a href="{{ route('home') }}#testimonials" class="hover:text-[#DFB254] transition">Client Stories</a></li>
                    <li><a href="{{ route('home') }}#faq" class="hover:text-[#DFB254] transition">Frequently Asked Questions</a></li>
                </ul>
            </div>

            <!-- Counselling Focus -->
            <div>
                <h5 class="text-xs font-semibold text-white uppercase tracking-wider mb-4">Counselling Focus</h5>
                <ul class="space-y-2.5 text-xs text-stone-400">
                    <li><a href="#counselling-services" class="hover:text-[#DFB254] transition">Family & Couples Counselling</a></li>
                    <li><a href="#counselling-services" class="hover:text-[#DFB254] transition">1-on-1 Personal Guidance</a></li>
                    <li><a href="#counselling-services" class="hover:text-[#DFB254] transition">Women's Boundary Coaching</a></li>
                    <li><a href="#counselling-services" class="hover:text-[#DFB254] transition">Toxic Relationship Recovery</a></li>
                    <li><a href="#counselling-services" class="hover:text-[#DFB254] transition">Premarital Alignment Sessions</a></li>
                </ul>
            </div>

            <!-- Contact & Modes -->
            <div>
                <h5 class="text-xs font-semibold text-white uppercase tracking-wider mb-4">Consultation Details</h5>
                <ul class="space-y-2.5 text-xs text-stone-400">
                    <li class="flex items-center gap-2">
                        <span>📍</span>
                        <span>Kochi & Calicut, Kerala</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span>🌍</span>
                        <span>Online Sessions (India, UAE, Global)</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span>💬</span>
                        <a href="https://wa.me/918590415943" target="_blank" class="hover:text-[#DFB254] transition">WhatsApp: +91 85904 15943</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <span>✉️</span>
                        <a href="mailto:care@jefnahameed.com" class="hover:text-[#DFB254] transition">care@jefnahameed.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Copyright & Admin Portal -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-stone-500">
            <p>© {{ date('Y') }} Jefna Hameed. All rights reserved. Professional Family Counseling & Relationship Guidance.</p>
            <div class="flex flex-wrap items-center gap-4 sm:gap-6">
                <span>Privacy &amp; Confidentiality Guaranteed</span>
                <span>•</span>
                <a href="#contact" class="hover:text-stone-300">Book Session</a>
                <span>•</span>
                <a href="{{ route('admin.login') }}" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#1F140D] border border-[#DFB254]/40 text-[#DFB254] hover:text-white hover:border-[#DFB254] transition text-[11px] font-medium shadow-xs">
                    <span class="w-4 h-4 rounded-full bg-[#54321A] text-[#FAF6F0] flex items-center justify-center text-[9px] font-bold">JH</span>
                    <span>Jefna Hameed Admin Login</span>
                </a>
            </div>
        </div>
    </div>
</footer>
