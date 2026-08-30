<div>
    @if($isOpen)
        <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <!-- Background backdrop -->
            <div class="fixed inset-0 bg-stone-900/60 backdrop-blur-sm transition-opacity" wire:click="closeModal"></div>

            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-3xl bg-[#FAF8F5] border border-stone-200 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-xl p-6 sm:p-8">
                    <!-- Close button -->
                    <button type="button" wire:click="closeModal" class="absolute top-5 right-5 text-stone-400 hover:text-stone-700 transition p-2 rounded-full hover:bg-stone-200/50">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    @if($isSuccess)
                        <div class="text-center py-6">
                            <div class="w-16 h-16 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <h3 class="font-serif text-2xl font-semibold text-[#3B4E3B] mb-2">Consultation Request Received</h3>
                            <p class="text-stone-600 text-sm mb-6 leading-relaxed">
                                Thank you, <span class="font-semibold text-stone-800">{{ $name }}</span>. We have securely saved your booking details. We will reach out shortly to confirm your confidential session.
                            </p>

                            @if($whatsappUrl)
                                <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-4 mb-6 text-left">
                                    <p class="text-xs font-semibold text-emerald-800 uppercase tracking-wider mb-1">Fast Track via WhatsApp</p>
                                    <p class="text-xs text-stone-600 mb-3">Connect directly with our clinical coordinator to confirm your preferred slot immediately.</p>
                                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-full px-4 py-3 bg-[#25D366] hover:bg-[#20ba5a] text-white font-medium text-sm rounded-xl transition shadow-sm gap-2">
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                        </svg>
                                        Fast Track on WhatsApp
                                    </a>
                                </div>
                            @endif

                            <button type="button" wire:click="closeModal" class="px-6 py-2.5 bg-[#3B4E3B] text-white rounded-xl text-sm font-medium hover:bg-[#2A382A] transition">
                                Done
                            </button>
                        </div>
                    @else
                        <div class="mb-6">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold tracking-wide bg-[#FAF0EE] text-[#7A3528] border border-[#7A3528]/20 mb-2">
                                🔒 100% Confidential & Safe
                            </span>
                            <h3 class="font-serif text-2xl sm:text-3xl font-semibold text-[#3B4E3B]">Book a Confidential Session</h3>
                            <p class="text-stone-600 text-sm mt-1">Take the first step towards emotional healing and relationship clarity.</p>
                        </div>

                        <form wire:submit="submit" class="space-y-4">
                            <!-- Full Name -->
                            <div>
                                <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Your Name *</label>
                                <input type="text" wire:model="name" placeholder="e.g. Sarah Joseph" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-white text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B4E3B] focus:border-transparent">
                                @error('name') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <!-- Phone & Email Grid -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Phone / WhatsApp *</label>
                                    <input type="tel" wire:model="phone" placeholder="+91 98765 43210" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-white text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B4E3B] focus:border-transparent">
                                    @error('phone') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Email Address</label>
                                    <input type="email" wire:model="email" placeholder="sarah@example.com" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-white text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B4E3B] focus:border-transparent">
                                    @error('email') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <!-- Service Type -->
                            <div>
                                <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Counselling Service *</label>
                                <select wire:model="service_type" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-white text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B4E3B]">
                                    <option value="1-on-1 Clinical Therapy">1-on-1 Clinical Therapy Session</option>
                                    <option value="Family & Couple Counselling">Family & Couple Counselling (ഭാര്യയും ഭർത്താവും)</option>
                                    <option value="Women's Growth & Boundary Coaching">Women's Personal Growth & Boundary Coaching</option>
                                    <option value="Toxic Relationship Healing">Toxic Relationship Healing Consultation</option>
                                    <option value="Premarital Guidance">Premarital Readiness & Guidance</option>
                                </select>
                                @error('service_type') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <!-- Preferred Slot & Mode -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Preferred Time Slot *</label>
                                    <select wire:model="preferred_slot" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-white text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B4E3B]">
                                        <option value="Morning (10:00 AM - 1:00 PM)">Morning (10 AM - 1 PM)</option>
                                        <option value="Afternoon (2:00 PM - 5:00 PM)">Afternoon (2 PM - 5 PM)</option>
                                        <option value="Evening (5:30 PM - 8:30 PM)">Evening (5:30 PM - 8:30 PM)</option>
                                        <option value="Weekend Special Slot">Weekend Special Slot</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Session Mode *</label>
                                    <select wire:model="session_mode" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-white text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B4E3B]">
                                        <option value="Online (Confidential Video/Audio)">Online (Google Meet/Zoom)</option>
                                        <option value="In-Person Clinic Session">In-Person Consultation</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Optional Message / Concern -->
                            <div>
                                <label class="block text-xs font-medium text-stone-700 uppercase tracking-wider mb-1">Brief Note (Optional & Confidential)</label>
                                <textarea wire:model="message" rows="2" placeholder="Briefly share what you would like to focus on..." class="w-full px-4 py-2 rounded-xl border border-stone-300 bg-white text-stone-800 text-sm focus:outline-none focus:ring-2 focus:ring-[#3B4E3B]"></textarea>
                                @error('message') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-2 flex items-center justify-end gap-3">
                                <button type="button" wire:click="closeModal" class="px-5 py-2.5 rounded-xl text-stone-600 hover:text-stone-900 text-sm font-medium transition">
                                    Cancel
                                </button>
                                <button type="submit" wire:loading.attr="disabled" class="inline-flex items-center justify-center px-6 py-2.5 bg-[#3B4E3B] hover:bg-[#2A382A] text-white font-medium text-sm rounded-xl transition shadow-md disabled:opacity-50">
                                    <span wire:loading.remove>Confirm Consultation</span>
                                    <span wire:loading>Processing...</span>
                                </button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>
