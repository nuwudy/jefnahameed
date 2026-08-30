<div class="bg-[#FCFAF7] border border-[#DFB254]/40 rounded-3xl p-6 sm:p-8 shadow-md">
    @if($isEnrolled)
        <div class="text-center py-6">
            <div class="w-14 h-14 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center mx-auto mb-3 text-2xl">
                🌹
            </div>
            <h4 class="font-serif text-2xl font-semibold text-[#54321A] mb-2">Registration Reserved!</h4>
            <p class="text-stone-600 text-sm mb-4">
                Thank you <strong class="text-stone-800">{{ $name }}</strong>. Your seat for <strong class="text-stone-800">{{ $selectedBatch }}</strong> is provisionally reserved.
            </p>

            @if($whatsappUrl)
                <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-4 mb-4 text-left">
                    <p class="text-xs font-semibold text-emerald-800 uppercase tracking-wider mb-1">Confirm on WhatsApp</p>
                    <p class="text-xs text-stone-600 mb-3">Send your pre-filled inquiry to receive the secure Zoom link and course materials guide directly on WhatsApp.</p>
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-full px-4 py-3 bg-[#25D366] hover:bg-[#20ba5a] text-white font-medium text-sm rounded-xl transition shadow-sm gap-2">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                        Send WhatsApp Confirmation
                    </a>
                </div>
            @endif

            <button type="button" wire:click="resetForm" class="text-xs text-stone-500 hover:text-stone-800 underline">
                Register another person
            </button>
        </div>
    @else
        <div class="mb-5">
            <div class="flex items-center justify-between gap-2 mb-2">
                <span class="badge-rose">⚡ Limited Batch Seats</span>
                <div class="text-right">
                    <span class="text-xs text-stone-400 line-through">₹{{ number_format($workshop->original_fee ?? 1999, 0) }}</span>
                    <span class="text-xl font-bold text-[#54321A] ml-1">₹{{ number_format($workshop->fee, 0) }}</span>
                </div>
            </div>
            <h4 class="font-serif text-xl font-semibold text-[#54321A]">Reserve Your Seat</h4>
            <p class="text-xs text-stone-600 mt-0.5">Secure, confidential online batch with live Q&A.</p>
        </div>

        <form wire:submit="enroll" class="space-y-3.5">
            <!-- Batch Selection -->
            <div>
                <label class="block text-xs font-semibold text-stone-700 mb-1">Select Batch Timing *</label>
                <div class="space-y-2">
                    @if(!empty($workshop->upcoming_batches))
                        @foreach($workshop->upcoming_batches as $batch)
                            <label class="flex items-center p-2.5 rounded-xl border text-xs cursor-pointer transition {{ $selectedBatch === $batch ? 'border-[#C29336] bg-[#FAF2DE]/70 font-medium text-[#8C651A]' : 'border-stone-200 bg-white text-stone-700 hover:border-stone-300' }}">
                                <input type="radio" wire:model="selectedBatch" value="{{ $batch }}" class="text-[#C29336] focus:ring-[#C29336] mr-2">
                                <span>{{ $batch }}</span>
                            </label>
                        @endforeach
                    @endif
                </div>
                @error('selectedBatch') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <!-- Name -->
            <div>
                <label class="block text-xs font-semibold text-stone-700 mb-1">Full Name *</label>
                <input type="text" wire:model="name" placeholder="Your name" class="w-full px-3.5 py-2 rounded-xl border border-stone-300 bg-white text-stone-800 text-xs focus:outline-none focus:ring-2 focus:ring-[#C29336]">
                @error('name') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <!-- Phone -->
            <div>
                <label class="block text-xs font-semibold text-stone-700 mb-1">WhatsApp Number *</label>
                <input type="tel" wire:model="phone" placeholder="+91 98765 43210" class="w-full px-3.5 py-2 rounded-xl border border-stone-300 bg-white text-stone-800 text-xs focus:outline-none focus:ring-2 focus:ring-[#C29336]">
                @error('phone') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-xs font-semibold text-stone-700 mb-1">Email (For Zoom & Worksheets)</label>
                <input type="email" wire:model="email" placeholder="you@example.com" class="w-full px-3.5 py-2 rounded-xl border border-stone-300 bg-white text-stone-800 text-xs focus:outline-none focus:ring-2 focus:ring-[#C29336]">
                @error('email') <span class="text-red-600 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <button type="submit" wire:loading.attr="disabled" class="w-full mt-2 py-3 bg-[#54321A] hover:bg-[#3B2110] text-[#FAF6F0] font-medium text-sm rounded-xl transition shadow-md flex items-center justify-center gap-2 border border-[#DFB254]/40">
                <span wire:loading.remove>Reserve Seat for ₹{{ number_format($workshop->fee, 0) }}</span>
                <span wire:loading>Processing registration...</span>
            </button>
            <p class="text-[11px] text-center text-stone-500">🔒 100% Confidential. Instant WhatsApp Confirmation.</p>
        </form>
    @endif
</div>
