<div>
    <!-- Category & Type Filter Bar -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-10 pb-6 border-b border-stone-200">
        <!-- Category Pills -->
        <div class="flex flex-wrap items-center justify-center md:justify-start gap-2">
            @foreach($categories as $cat)
                <button type="button"
                        wire:click="filterCategory('{{ $cat }}')"
                        class="px-4 py-2 rounded-full text-xs font-semibold tracking-wide transition {{ $selectedCategory === $cat ? 'bg-[#3B4E3B] text-white shadow-sm' : 'bg-white text-stone-700 hover:bg-[#EEF3ED] border border-stone-200' }}">
                    {{ $cat }}
                </button>
            @endforeach
        </div>

        <!-- Media Type Selector -->
        <div class="inline-flex items-center p-1 rounded-xl bg-stone-200/70 text-xs">
            <button type="button"
                    wire:click="filterType('all')"
                    class="px-3 py-1.5 rounded-lg font-medium transition {{ $selectedType === 'all' ? 'bg-white text-stone-900 shadow-xs' : 'text-stone-600 hover:text-stone-900' }}">
                All Media
            </button>
            <button type="button"
                    wire:click="filterType('image')"
                    class="px-3 py-1.5 rounded-lg font-medium transition {{ $selectedType === 'image' ? 'bg-white text-stone-900 shadow-xs' : 'text-stone-600 hover:text-stone-900' }}">
                📷 Photos
            </button>
            <button type="button"
                    wire:click="filterType('video')"
                    class="px-3 py-1.5 rounded-lg font-medium transition {{ $selectedType === 'video' ? 'bg-white text-stone-900 shadow-xs' : 'text-stone-600 hover:text-stone-900' }}">
                🎬 Videos
            </button>
        </div>
    </div>

    <!-- Media Grid -->
    @if($mediaItems->isEmpty())
        <div class="text-center py-16 bg-white rounded-3xl border border-stone-200">
            <div class="w-16 h-16 bg-[#FAF0EE] text-[#7A3528] rounded-full flex items-center justify-center mx-auto mb-3 text-2xl">
                📷
            </div>
            <h4 class="font-serif text-xl font-bold text-stone-800">No Media in this Category Yet</h4>
            <p class="text-xs text-stone-500 mt-1 max-w-sm mx-auto">New workshop photos, session insights, and video reels will be added soon.</p>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($mediaItems as $media)
                <div class="group bg-white border border-stone-200 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between card-hover-lift">
                    <!-- Media Card Top Media Area -->
                    <div class="relative aspect-[4/3] bg-stone-100 overflow-hidden cursor-pointer" wire:click="openLightbox({{ $media->id }})">
                        <img src="{{ $media->display_thumbnail }}"
                             alt="{{ $media->title }}"
                             class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                             loading="lazy">

                        <!-- Media Type Tag -->
                        <div class="absolute top-3 left-3 flex items-center gap-1.5">
                            @if(in_array($media->type, ['video', 'embed']))
                                <span class="px-2.5 py-1 rounded-full text-[11px] font-semibold bg-stone-900/80 backdrop-blur-xs text-white flex items-center gap-1">
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                    Video {{ $media->duration ? '• ' . $media->duration : '' }}
                                </span>
                            @else
                                <span class="px-2.5 py-1 rounded-full text-[11px] font-semibold bg-stone-900/80 backdrop-blur-xs text-white">
                                    📷 Photo
                                </span>
                            @endif
                        </div>

                        <!-- Hover Preview Icon Overlay -->
                        <div class="absolute inset-0 bg-stone-900/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center text-white">
                            <span class="w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <!-- Media Caption & Metadata -->
                    <div class="p-5 flex-grow flex flex-col justify-between space-y-3">
                        <div>
                            <span class="text-[11px] font-semibold text-[#7A3528] uppercase tracking-wider block mb-1">
                                {{ $media->category }}
                            </span>
                            <h4 class="font-serif text-lg font-bold text-stone-900 leading-snug group-hover:text-[#3B4E3B] transition">
                                {{ $media->title }}
                            </h4>
                            @if($media->caption)
                                <p class="text-xs text-stone-600 mt-1.5 line-clamp-2 leading-relaxed">
                                    {{ $media->caption }}
                                </p>
                            @endif
                        </div>

                        <div class="pt-3 border-t border-stone-100 flex items-center justify-between">
                            <button type="button"
                                    wire:click="openLightbox({{ $media->id }})"
                                    class="text-xs font-semibold text-[#3B4E3B] hover:underline flex items-center gap-1">
                                <span>View {{ in_array($media->type, ['video', 'embed']) ? 'Video' : 'Full Photo' }}</span> →
                            </button>
                            <a href="https://wa.me/918590415943?text=Hello%20Jefna,%20I%20saw%20this%20in%20your%20media%20library:%20{{ urlencode($media->title) }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="text-xs text-stone-400 hover:text-emerald-600 transition"
                               title="Inquire about this on WhatsApp">
                                💬 Share
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <!-- Interactive Lightbox Modal -->
    @if($isLightboxOpen && $activeMedia)
        <div class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="media-modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-stone-950/85 backdrop-blur-md transition-opacity" wire:click="closeLightbox"></div>

            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-6">
                <div class="relative transform overflow-hidden rounded-3xl bg-[#FAF8F5] border border-stone-200 text-left shadow-2xl transition-all sm:my-8 w-full max-w-3xl p-4 sm:p-6">
                    
                    <!-- Close button -->
                    <button type="button"
                            wire:click="closeLightbox"
                            class="absolute top-4 right-4 z-20 text-stone-500 hover:text-stone-900 bg-white/80 rounded-full p-2 backdrop-blur-sm shadow-sm transition">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>

                    <!-- Media Player / Image Display -->
                    <div class="rounded-2xl overflow-hidden bg-stone-950 max-h-[70vh] flex items-center justify-center mb-4">
                        @if($activeMedia->type === 'image')
                            <img src="{{ $activeMedia->display_url }}"
                                 alt="{{ $activeMedia->title }}"
                                 class="max-h-[65vh] w-auto max-w-full object-contain mx-auto">
                        @elseif($activeMedia->type === 'embed')
                            <div class="w-full aspect-video">
                                <iframe src="{{ $activeMedia->youtube_embed_url }}"
                                        class="w-full h-full"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        @elseif($activeMedia->type === 'video')
                            <video controls class="w-full max-h-[65vh] rounded-xl" autoplay>
                                <source src="{{ $activeMedia->display_url }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    </div>

                    <!-- Lightbox Details Footer -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-2">
                        <div>
                            <span class="badge-terracotta text-[10px] mb-1">{{ $activeMedia->category }}</span>
                            <h3 class="font-serif text-xl font-bold text-[#3B4E3B]">{{ $activeMedia->title }}</h3>
                            @if($activeMedia->caption)
                                <p class="text-xs text-stone-600 mt-1 leading-relaxed">{{ $activeMedia->caption }}</p>
                            @endif
                        </div>
                        <div class="shrink-0 flex items-center gap-2">
                            <a href="https://wa.me/918590415943?text=Hello%20Jefna,%20I%20am%20inquiring%20about:%20{{ urlencode($activeMedia->title) }}"
                               target="_blank"
                               class="px-4 py-2.5 bg-[#25D366] hover:bg-[#20ba5a] text-white text-xs font-semibold rounded-xl flex items-center gap-1.5 transition shadow-sm">
                                <span>Inquire on WhatsApp</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif
</div>
