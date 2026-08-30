<div>
    <!-- Search & Category Filters Bar -->
    <div class="mb-10 space-y-6">
        
        <!-- Search & Filter Controls Grid -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            
            <!-- Category Pills Bar -->
            <div class="flex flex-wrap items-center gap-2">
                @foreach($categories as $key => $label)
                    <button type="button"
                            wire:click="selectCategory('{{ $key }}')"
                            class="px-4 py-2 rounded-full text-xs font-semibold transition cursor-pointer {{ $category === $key ? 'bg-[#54321A] text-[#FAF6F0] shadow-sm border border-[#DFB254]/40' : 'bg-white text-stone-700 hover:bg-[#FAF2DE] border border-[#E8DFD3]' }}">
                        {{ $label }}
                    </button>
                @endforeach
            </div>

            <!-- Search Input Box -->
            <div class="w-full md:w-72 relative">
                <input type="text"
                       wire:model.live.debounce.300ms="search"
                       placeholder="Search relationship topics..."
                       class="w-full pl-9 pr-4 py-2.5 bg-white border border-[#DFB254]/30 rounded-2xl text-xs text-stone-800 placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-[#C29336]">
                <span class="absolute left-3 top-3 text-stone-400 text-xs">🔍</span>
            </div>
        </div>

    </div>

    <!-- Posts Grid -->
    @if($posts->isEmpty())
        <div class="bg-white border border-[#E8DFD3] rounded-3xl p-12 text-center max-w-lg mx-auto">
            <span class="text-3xl mb-2 block">📖</span>
            <h3 class="font-serif text-xl font-bold text-[#54321A]">No Articles Found</h3>
            <p class="text-xs text-stone-500 mt-1 mb-4">Try adjusting your search terms or selecting a different category filter.</p>
            <button type="button" wire:click="$set('search', ''); $set('category', 'all')" class="px-5 py-2 bg-[#54321A] text-white text-xs rounded-xl font-semibold hover:bg-[#3B2110] transition">
                Reset Filters
            </button>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
                <article class="bg-white border border-[#E8DFD3] rounded-3xl overflow-hidden shadow-sm flex flex-col justify-between card-hover-lift group">
                    <div>
                        <!-- Cover Image -->
                        <div class="relative aspect-[16/10] bg-stone-100 overflow-hidden">
                            <a href="{{ route('blog.show', $post->slug) }}">
                                <img src="{{ $post->display_image }}"
                                     alt="{{ $post->title }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                     loading="lazy">
                            </a>
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full text-[10px] font-bold tracking-wider uppercase bg-[#54321A]/90 text-[#FAF6F0] backdrop-blur-xs border border-[#DFB254]/30 shadow-xs">
                                {{ $post->category }}
                            </span>
                            <span class="absolute bottom-3 right-3 px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-black/60 text-white backdrop-blur-xs">
                                ⏱️ {{ $post->read_time }}
                            </span>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6">
                            <div class="text-[11px] text-stone-400 font-medium mb-2">
                                {{ $post->published_at ? $post->published_at->format('M d, Y') : $post->created_at->format('M d, Y') }}
                            </div>

                            <h3 class="font-serif text-lg font-bold text-[#54321A] group-hover:text-[#8B3846] transition leading-snug">
                                <a href="{{ route('blog.show', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>

                            <p class="text-xs text-stone-600 mt-2.5 leading-relaxed line-clamp-3">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                    </div>

                    <!-- Footer Link -->
                    <div class="p-6 pt-0 border-t border-stone-100 flex items-center justify-between text-xs">
                        <span class="text-stone-400 font-medium">By Jefna Hameed</span>
                        <a href="{{ route('blog.show', $post->slug) }}" class="font-bold text-[#8B3846] hover:text-[#54321A] transition inline-flex items-center gap-1">
                            <span>Read Article</span>
                            <span>→</span>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-10 pt-6 border-t border-[#E8DFD3]">
            {{ $posts->links() }}
        </div>
    @endif
</div>
