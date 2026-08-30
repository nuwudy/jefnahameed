<div class="max-w-md mx-auto bg-white border border-[#DFB254]/40 rounded-3xl p-8 shadow-xl">
    <div class="text-center mb-6">
        <div class="w-14 h-14 bg-[#54321A] text-[#FAF6F0] border border-[#DFB254]/40 rounded-2xl flex items-center justify-center font-serif text-2xl font-bold mx-auto mb-3 shadow-sm">
            JH
        </div>
        <span class="badge-gold text-xs mb-1">Administrative Access</span>
        <h2 class="font-serif text-2xl font-bold text-[#54321A]">Admin Portal Login</h2>
        <p class="text-xs text-stone-500 mt-1">Manage consultation inquiries, workshop enrollments, and media library.</p>
    </div>

    @if($errorMessage)
        <div class="mb-4 p-3 bg-rose-50 border border-rose-200 text-rose-800 text-xs rounded-xl flex items-center gap-2">
            <span>⚠️</span>
            <span>{{ $errorMessage }}</span>
        </div>
    @endif

    <form wire:submit="login" class="space-y-4">
        <div>
            <label class="block text-xs font-semibold text-stone-700 uppercase tracking-wider mb-1">Admin Email</label>
            <input type="email" wire:model="email" placeholder="admin@jefnahameed.com" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-[#FCFAF7] text-stone-800 text-xs focus:ring-2 focus:ring-[#C29336]">
            @error('email') <span class="text-rose-600 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-xs font-semibold text-stone-700 uppercase tracking-wider mb-1">Password</label>
            <input type="password" wire:model="password" placeholder="••••••••••••" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-[#FCFAF7] text-stone-800 text-xs focus:ring-2 focus:ring-[#C29336]">
            @error('password') <span class="text-rose-600 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div class="flex items-center justify-between text-xs pt-1">
            <label class="flex items-center gap-2 text-stone-600 cursor-pointer">
                <input type="checkbox" wire:model="remember" class="rounded text-[#54321A] focus:ring-[#C29336]">
                <span>Remember this device</span>
            </label>
        </div>

        <button type="submit" wire:loading.attr="disabled" class="w-full py-3 bg-[#54321A] hover:bg-[#3B2110] text-[#FAF6F0] font-semibold text-xs rounded-xl transition shadow-md border border-[#DFB254]/40 flex items-center justify-center gap-2">
            <span wire:loading.remove>Sign In to Dashboard</span>
            <span wire:loading>Authenticating...</span>
        </button>
    </form>
</div>
