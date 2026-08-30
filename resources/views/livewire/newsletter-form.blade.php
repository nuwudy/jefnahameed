<div>
    @if($isSubscribed)
        <div class="p-3 bg-emerald-900/40 border border-emerald-500/30 rounded-xl text-emerald-200 text-xs flex items-center gap-2">
            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span>Thank you! You are subscribed to our monthly relationship & psychological health insights.</span>
        </div>
    @else
        <form wire:submit="subscribe" class="flex flex-col sm:flex-row gap-2">
            <input type="email" wire:model="email" placeholder="Enter your email address" class="px-4 py-2.5 rounded-xl bg-white/10 border border-white/20 text-white placeholder-stone-400 text-xs focus:outline-none focus:ring-2 focus:ring-[#FAF0EE] flex-1">
            <button type="submit" wire:loading.attr="disabled" class="px-5 py-2.5 bg-[#FAF0EE] hover:bg-white text-[#3B4E3B] font-semibold text-xs rounded-xl transition shrink-0">
                <span wire:loading.remove>Subscribe Free</span>
                <span wire:loading>Joining...</span>
            </button>
        </form>
        @error('email') <span class="text-rose-300 text-xs mt-1 block">{{ $message }}</span> @enderror
    @endif
</div>
