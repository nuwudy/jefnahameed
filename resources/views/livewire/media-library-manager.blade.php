<div>
    <!-- Header Banner -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8 bg-white p-6 rounded-3xl border border-stone-200 shadow-sm">
        <div>
            <span class="badge-olive text-xs mb-1">Media Management Center</span>
            <h2 class="font-serif text-2xl font-bold text-[#3B4E3B]">Media Library & Uploads</h2>
            <p class="text-xs text-stone-600 mt-1">Upload and organize workshop photos, relationship guidance video reels, and counseling highlights.</p>
        </div>
        <div class="flex items-center gap-3">
            <button type="button"
                    wire:click="openCreateModal"
                    class="px-5 py-2.5 bg-[#3B4E3B] hover:bg-[#2A382A] text-white text-xs font-semibold rounded-xl shadow-sm transition flex items-center gap-2">
                <span>+ Add Photos / Videos</span>
            </button>
            <a href="{{ route('media.index') }}" target="_blank" class="px-4 py-2.5 bg-[#FAF8F5] hover:bg-stone-200 text-stone-700 text-xs font-medium rounded-xl border border-stone-200 transition">
                View Public Gallery ↗
            </a>
        </div>
    </div>

    <!-- Feedback Message -->
    @if($isSuccess)
        <div class="p-4 mb-6 bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-medium rounded-2xl flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span>✓</span>
                <span>{{ $successMessage }}</span>
            </div>
            <button type="button" wire:click="$set('isSuccess', false)" class="text-emerald-700 hover:text-emerald-900 font-bold">✕</button>
        </div>
    @endif

    <!-- Media Library Items Table / Grid -->
    @if($items->isEmpty())
        <div class="text-center py-16 bg-white rounded-3xl border border-stone-200">
            <div class="w-16 h-16 bg-[#FAF0EE] text-[#7A3528] rounded-full flex items-center justify-center mx-auto mb-3 text-2xl">
                📁
            </div>
            <h4 class="font-serif text-xl font-bold text-stone-800">Media Library is Empty</h4>
            <p class="text-xs text-stone-500 mt-1 max-w-sm mx-auto mb-4">Click below to upload your first workshop photos or embed guidance video links.</p>
            <button type="button" wire:click="openCreateModal" class="px-6 py-2.5 bg-[#7A3528] text-white text-xs font-semibold rounded-xl shadow-sm hover:bg-[#60281E] transition">
                Upload Now
            </button>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($items as $item)
                <div class="bg-white border border-stone-200 rounded-3xl overflow-hidden shadow-sm flex flex-col justify-between">
                    <!-- Media Preview Area -->
                    <div class="relative aspect-[4/3] bg-stone-900 overflow-hidden">
                        @if($item->type === 'video' && !$item->thumbnail_path)
                            <video src="{{ $item->display_url }}#t=0.5" preload="metadata" muted playsinline class="w-full h-full object-cover"></video>
                            <div class="absolute inset-0 bg-black/30 flex items-center justify-center pointer-events-none">
                                <span class="w-10 h-10 rounded-full bg-white/30 backdrop-blur-xs text-white flex items-center justify-center text-sm shadow-md">
                                    ▶
                                </span>
                            </div>
                        @else
                            <img src="{{ $item->display_thumbnail }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                        @endif

                        <div class="absolute top-2.5 left-2.5 z-10">
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider {{ $item->type === 'image' ? 'bg-stone-900/80 text-white' : 'bg-[#54321A] text-[#FAF6F0] border border-[#DFB254]/40' }}">
                                {{ $item->type }}
                            </span>
                        </div>
                        <div class="absolute top-2.5 right-2.5 z-10">
                            <button type="button" wire:click="togglePublic({{ $item->id }})" class="px-2 py-0.5 rounded-full text-[10px] font-bold {{ $item->is_public ? 'bg-emerald-600 text-white' : 'bg-stone-500 text-white' }}">
                                {{ $item->is_public ? 'Public' : 'Hidden' }}
                            </button>
                        </div>
                    </div>

                    <!-- Item Details -->
                    <div class="p-4 space-y-2 flex-grow">
                        <span class="text-[10px] font-semibold text-[#7A3528] uppercase">{{ $item->category }}</span>
                        <h4 class="font-serif text-sm font-bold text-stone-900 leading-snug line-clamp-1">{{ $item->title }}</h4>
                        @if($item->caption)
                            <p class="text-[11px] text-stone-500 line-clamp-2">{{ $item->caption }}</p>
                        @endif
                    </div>

                    <!-- Actions Strip -->
                    <div class="px-4 py-3 bg-[#FAF8F5] border-t border-stone-100 flex items-center justify-between text-xs">
                        <button type="button" wire:click="edit({{ $item->id }})" class="font-semibold text-[#3B4E3B] hover:underline">
                            Edit Details
                        </button>
                        <button type="button"
                                wire:confirm="Are you sure you want to delete this media item?"
                                wire:click="delete({{ $item->id }})"
                                class="text-rose-600 hover:text-rose-800 font-medium">
                            Delete
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Upload / Edit Modal -->
    @if($isModalOpen)
        <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-stone-900/70 backdrop-blur-sm transition-opacity" wire:click="closeModal"></div>

            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-6">
                <div class="relative transform overflow-hidden rounded-3xl bg-[#FAF8F5] border border-stone-200 text-left shadow-2xl transition-all sm:my-8 w-full max-w-xl p-6 sm:p-8">
                    <button type="button" wire:click="closeModal" class="absolute top-5 right-5 text-stone-400 hover:text-stone-700 p-2">
                        ✕
                    </button>

                    <div class="mb-5">
                        <span class="badge-terracotta text-xs mb-1">{{ $editingId ? 'Edit Media' : 'Upload New' }}</span>
                        <h3 class="font-serif text-2xl font-bold text-[#3B4E3B]">{{ $editingId ? 'Edit Media Item' : 'Add Photos / Videos' }}</h3>
                    </div>

                    <form wire:submit="save" class="space-y-4">
                        <!-- Media Type Selection -->
                        <div>
                            <label class="block text-xs font-semibold text-stone-700 mb-1">Media Type *</label>
                            <div class="grid grid-cols-3 gap-2">
                                <label class="flex items-center justify-center p-2.5 rounded-xl border text-xs font-medium cursor-pointer {{ $type === 'image' ? 'border-[#3B4E3B] bg-[#EEF3ED] text-[#3B4E3B]' : 'bg-white text-stone-700 border-stone-200' }}">
                                    <input type="radio" wire:model.live="type" value="image" class="sr-only">
                                    📷 Photo / Image
                                </label>
                                <label class="flex items-center justify-center p-2.5 rounded-xl border text-xs font-medium cursor-pointer {{ $type === 'embed' ? 'border-[#3B4E3B] bg-[#EEF3ED] text-[#3B4E3B]' : 'bg-white text-stone-700 border-stone-200' }}">
                                    <input type="radio" wire:model.live="type" value="embed" class="sr-only">
                                    🎬 YouTube / Video Link
                                </label>
                                <label class="flex items-center justify-center p-2.5 rounded-xl border text-xs font-medium cursor-pointer {{ $type === 'video' ? 'border-[#3B4E3B] bg-[#EEF3ED] text-[#3B4E3B]' : 'bg-white text-stone-700 border-stone-200' }}">
                                    <input type="radio" wire:model.live="type" value="video" class="sr-only">
                                    📁 MP4 Direct File
                                </label>
                            </div>
                        </div>

                        <!-- Title -->
                        <div>
                            <label class="block text-xs font-semibold text-stone-700 mb-1">Title *</label>
                            <input type="text" wire:model="title" placeholder="e.g. How to Heal Toxic Relationships Workshop Batch 1" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-white text-stone-800 text-xs focus:ring-2 focus:ring-[#3B4E3B]">
                            @error('title') <span class="text-rose-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <!-- Category -->
                        <div>
                            <label class="block text-xs font-semibold text-stone-700 mb-1">Category *</label>
                            <select wire:model="category" class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-white text-stone-800 text-xs focus:ring-2 focus:ring-[#3B4E3B]">
                                <option value="Workshops & Events">Workshops & Events</option>
                                <option value="Relationship Guidance">Relationship Guidance</option>
                                <option value="Counselling & Therapy">Counselling & Therapy</option>
                                <option value="Moments & Talks">Moments & Talks</option>
                            </select>
                        </div>
                        
                        <!-- If Image File Upload -->
                        @if($type === 'image')
                            <div class="p-4 bg-white rounded-2xl border border-stone-200 space-y-2">
                                <label class="block text-xs font-bold text-stone-800">
                                    📷 Select Photo / Image <span class="text-rose-500">*</span>
                                    <span class="text-[10px] text-stone-500 font-normal block">Supports JPG, PNG, WebP (up to 20MB)</span>
                                </label>
                                <input type="file" wire:model="file" accept="image/*" class="w-full text-xs text-stone-600 file:mr-3 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-[#FAF2DE] file:text-[#54321A] hover:file:bg-[#54321A] hover:file:text-white file:transition">
                                <div wire:loading wire:target="file" class="text-xs text-[#8B3846] font-medium animate-pulse flex items-center gap-1.5 pt-1">
                                    <span>⏳ Uploading photo, please wait...</span>
                                </div>
                                @error('file') <span class="text-rose-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                            </div>
                        @endif

                        <!-- If Direct MP4/WebM Video Upload -->
                        @if($type === 'video')
                            <div class="p-4 bg-white rounded-2xl border-2 border-dashed border-[#54321A]/30 space-y-3">
                                <label class="block text-xs font-bold text-stone-800">
                                    📁 Select Video File (MP4, WebM, MOV) <span class="text-rose-500">*</span>
                                    <span class="text-[10px] text-stone-500 font-normal block">Supports large video files up to 512MB</span>
                                </label>
                                <input type="file" wire:model="file" accept="video/mp4,video/webm,video/quicktime,video/*" class="w-full text-xs text-stone-600 file:mr-3 file:py-2.5 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-[#54321A] file:text-[#FAF6F0] hover:file:bg-[#3B2110] file:transition cursor-pointer">
                                
                                <div wire:loading wire:target="file" class="p-3 bg-[#FAF2DE] rounded-xl text-xs text-[#54321A] font-semibold flex items-center gap-2 border border-[#DFB254]/40">
                                    <span class="animate-spin inline-block">⏳</span>
                                    <span>Uploading video to server... Please keep this window open until complete.</span>
                                </div>
                                @error('file') <span class="text-rose-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                            </div>
                        @endif

                        <!-- If Embed Link -->
                        @if($type === 'embed')
                            <div>
                                <label class="block text-xs font-semibold text-stone-700 mb-1">YouTube / Video Embed URL *</label>
                                <input type="url" wire:model="embed_url" placeholder="https://www.youtube.com/watch?v=..." class="w-full px-4 py-2.5 rounded-xl border border-stone-300 bg-white text-stone-800 text-xs focus:ring-2 focus:ring-[#54321A]">
                                @error('embed_url') <span class="text-rose-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                            </div>
                        @endif

                        <!-- Optional Poster Thumbnail for Video / Embed -->
                        @if($type !== 'image')
                            <div class="p-3.5 bg-stone-50 rounded-2xl border border-stone-200 space-y-1.5">
                                <label class="block text-xs font-semibold text-stone-700">
                                    🖼️ Custom Video Poster Image (Optional)
                                    <span class="text-[10px] text-stone-500 font-normal block">JPG, PNG, or WebP cover image to show before video plays.</span>
                                </label>
                                <input type="file" wire:model="thumbnail" accept="image/*" class="w-full text-xs text-stone-600 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-stone-200 file:text-stone-700">
                                <div wire:loading wire:target="thumbnail" class="text-xs text-stone-500 pt-1">
                                    <span>Uploading thumbnail...</span>
                                </div>
                                @error('thumbnail') <span class="text-rose-600 text-xs mt-1 block">{{ $message }}</span> @enderror
                            </div>
                        @endif

                        <!-- Caption / Description -->
                        <div>
                            <label class="block text-xs font-semibold text-stone-700 mb-1">Caption / Description (Optional)</label>
                            <textarea wire:model="caption" rows="2" placeholder="Brief description or takeaway..." class="w-full px-4 py-2 rounded-xl border border-stone-300 bg-white text-stone-800 text-xs focus:ring-2 focus:ring-[#54321A]"></textarea>
                        </div>

                        <!-- Visibility / Featured -->
                        <div class="flex items-center gap-6 pt-2">
                            <label class="flex items-center gap-2 text-xs font-medium text-stone-700 cursor-pointer">
                                <input type="checkbox" wire:model="is_public" class="rounded text-[#54321A] focus:ring-[#54321A]">
                                <span>Publicly Visible</span>
                            </label>
                            <label class="flex items-center gap-2 text-xs font-medium text-stone-700 cursor-pointer">
                                <input type="checkbox" wire:model="is_featured" class="rounded text-[#54321A] focus:ring-[#54321A]">
                                <span>Feature on Home Page</span>
                            </label>
                        </div>

                        <div class="pt-4 flex items-center justify-end gap-3 border-t border-stone-200">
                            <button type="button" wire:click="closeModal" class="px-4 py-2.5 text-stone-600 hover:text-stone-900 text-xs font-semibold">
                                Cancel
                            </button>
                            <button type="submit"
                                    wire:loading.attr="disabled"
                                    wire:target="file, thumbnail, save"
                                    class="px-6 py-2.5 bg-[#54321A] hover:bg-[#3B2110] disabled:opacity-50 text-[#FAF6F0] rounded-xl text-xs font-semibold shadow-md transition flex items-center gap-2 cursor-pointer">
                                <span wire:loading.remove wire:target="file, thumbnail, save">{{ $editingId ? 'Update Item' : 'Upload to Library' }}</span>
                                <span wire:loading wire:target="file, thumbnail, save">Uploading &amp; Saving...</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>
