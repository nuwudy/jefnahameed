<div class="bg-white border border-[#DFB254]/40 rounded-3xl p-6 sm:p-10 shadow-md">
    @if($isSuccess)
        <div class="text-center py-8">
            <div class="w-16 h-16 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                💌
            </div>
            <h3 class="font-serif text-2xl font-semibold text-[#54321A] mb-2">Message Sent Confidentially</h3>
            <p class="text-stone-600 text-sm max-w-md mx-auto mb-6">
                Thank you, <strong class="text-stone-800">{{ $name }}</strong>. We have received your inquiry. Jefna Hameed or our clinical team will get in touch with you within 24 hours.
            </p>
            <button type="button" wire:click="resetForm" class="px-6 py-2.5 bg-[#54321A] text-white rounded-xl text-xs font-medium hover:bg-[#3B2110] transition border border-[#DFB254]/30">
                Send another message
            </button>
        </div>
    @else
        <form wire:submit="submit" class="space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Your Name *</label>
                    <input type="text" wire:model="name" placeholder="Full name" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-[#FCFAF7] text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#C29336]">
                    @error('name') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Phone / WhatsApp *</label>
                    <input type="tel" wire:model="phone" placeholder="+91 98765 43210" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-[#FCFAF7] text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#C29336]">
                    @error('phone') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Email Address</label>
                    <input type="email" wire:model="email" placeholder="you@example.com" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-[#FCFAF7] text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#C29336]">
                    @error('email') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Area of Inquiry *</label>
                    <select wire:model="service_type" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-[#FCFAF7] text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#C29336]">
                        <option value="Family & Couple Counselling">Family & Couple Counselling (ഭാര്യയും ഭർത്താവും)</option>
                        <option value="1-on-1 Clinical Therapy">1-on-1 Personal Guidance Session</option>
                        <option value="Women's Growth & Boundary Coaching">Women's Personal Growth & Boundaries</option>
                        <option value="Toxic Relationship Healing">Toxic Relationship Healing</option>
                        <option value="Workshop & Masterclass Inquiry">Workshop & Masterclass Inquiry</option>
                        <option value="Other Clinical Question">General Consultation</option>
                    </select>
                    @error('service_type') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Preferred Slot</label>
                    <select wire:model="preferred_slot" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-[#FCFAF7] text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#C29336]">
                        <option value="Morning (10:00 AM - 1:00 PM)">Morning (10 AM - 1 PM)</option>
                        <option value="Afternoon (2:00 PM - 5:00 PM)">Afternoon (2 PM - 5 PM)</option>
                        <option value="Evening (5:30 PM - 8:30 PM)">Evening (5:30 PM - 8:30 PM)</option>
                        <option value="Flexible / Any Slot">Flexible / Any Slot</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Preferred Mode</label>
                    <select wire:model="session_mode" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-[#FCFAF7] text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#C29336]">
                        <option value="Online (Video/Audio)">Online Session (Worldwide)</option>
                        <option value="In-Person Consultation">In-Person Consultation (Kerala)</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">How can we support you? *</label>
                <textarea wire:model="message" rows="3" placeholder="Describe your concern or goals confidentially..." class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-[#FCFAF7] text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#C29336]"></textarea>
                @error('message') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div class="flex items-center justify-between pt-2">
                <span class="text-xs text-stone-500 flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                    Strict Patient Confidentiality
                </span>
                <button type="submit" wire:loading.attr="disabled" class="px-8 py-3 bg-[#54321A] hover:bg-[#3B2110] text-[#FAF6F0] font-medium text-sm rounded-xl transition shadow-md border border-[#DFB254]/30">
                    <span wire:loading.remove>Send Inquiry</span>
                    <span wire:loading>Sending...</span>
                </button>
            </div>
        </form>
    @endif
</div>
