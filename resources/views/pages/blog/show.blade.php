@extends('layouts.app')

@section('title', $metaTitle)
@section('meta_description', $metaDescription)

@section('content')

<!-- 1. ARTICLE HEADER SECTION -->
<section class="py-12 sm:py-16 bg-gradient-to-b from-[#FAF6F0] via-[#FAF2DE]/30 to-[#FAF6F0] border-b border-[#DFB254]/30">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-xs text-stone-500 mb-6">
            <a href="{{ route('home') }}" class="hover:text-[#54321A] transition">Home</a>
            <span>/</span>
            <a href="{{ route('blog.index') }}" class="hover:text-[#54321A] transition">Blog & Insights</a>
            <span>/</span>
            <span class="text-stone-800 font-semibold truncate max-w-xs">{{ $post->title }}</span>
        </nav>

        <!-- Meta Strip -->
        <div class="flex flex-wrap items-center gap-3 mb-4">
            <span class="badge-gold text-xs">
                {{ $post->category }}
            </span>
            <span class="text-xs text-stone-500">
                ⏱️ {{ $post->read_time }}
            </span>
            <span class="text-xs text-stone-400">•</span>
            <span class="text-xs text-stone-500">
                {{ $post->published_at ? $post->published_at->format('F d, Y') : $post->created_at->format('F d, Y') }}
            </span>
        </div>

        <!-- Article Headline -->
        <h1 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-bold text-[#54321A] leading-[1.2] tracking-tight mb-6">
            {{ $post->title }}
        </h1>

        <!-- Excerpt Subtitle -->
        <p class="text-base sm:text-lg text-stone-700 font-normal leading-relaxed border-l-4 border-[#8B3846] pl-4 py-1 bg-white/60 rounded-r-2xl">
            {{ $post->excerpt }}
        </p>

        <!-- Author Byline -->
        <div class="flex items-center justify-between gap-4 mt-8 pt-6 border-t border-[#DFB254]/30">
            <div class="flex items-center gap-3">
                <div class="w-11 h-11 rounded-full overflow-hidden border-2 border-[#DFB254]/40 shadow-xs">
                    <img src="{{ asset('images/jefna-hameed.webp') }}" alt="Jefna Hameed" class="w-full h-full object-cover object-top">
                </div>
                <div>
                    <h4 class="text-xs font-bold text-[#54321A]">Jefna Hameed</h4>
                    <p class="text-[11px] text-[#8B3846] font-medium">Family Counselor & Relationship Specialist</p>
                </div>
            </div>

            <!-- WhatsApp Share Button -->
            <a href="https://api.whatsapp.com/send?text={{ urlencode($post->title . ' — ' . url()->current()) }}"
               target="_blank"
               rel="noopener noreferrer"
               class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-[#25D366] hover:bg-[#20ba5a] text-white text-xs font-medium rounded-xl transition shadow-xs">
                <span>Share on WhatsApp</span>
            </a>
        </div>

    </div>
</section>

<!-- 2. ARTICLE CONTENT SECTION -->
<section class="py-12 sm:py-16 bg-[#FCFAF7]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Featured Cover Image -->
        @if($post->cover_image)
            <div class="mb-10 rounded-3xl overflow-hidden border border-[#DFB254]/40 shadow-xl max-h-[460px] bg-stone-900">
                <img src="{{ $post->display_image }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
            </div>
        @endif

        <!-- Main Body Prose -->
        <div class="bg-white border border-[#E8DFD3] rounded-3xl p-6 sm:p-10 shadow-sm space-y-6 text-stone-800 text-sm sm:text-base leading-relaxed prose prose-stone max-w-none prose-headings:font-serif prose-headings:text-[#54321A] prose-a:text-[#8B3846] prose-blockquote:border-l-[#8B3846] prose-blockquote:bg-[#FAECF0]/60 prose-blockquote:p-4 prose-blockquote:rounded-r-2xl prose-blockquote:font-serif prose-blockquote:italic">
            {!! $formattedBody !!}
        </div>

        <!-- 3. AUTHOR BIO BOX -->
        <div class="mt-12 bg-[#FAF6F0] border border-[#DFB254]/40 rounded-3xl p-6 sm:p-8 flex flex-col sm:flex-row items-start sm:items-center gap-6 shadow-sm">
            <div class="w-20 h-20 rounded-2xl overflow-hidden border-2 border-[#DFB254]/50 shadow-md shrink-0">
                <img src="{{ asset('images/jefna-hameed.webp') }}" alt="Jefna Hameed" class="w-full h-full object-cover object-top">
            </div>
            <div class="space-y-2 flex-1">
                <span class="text-[11px] uppercase font-bold tracking-wider text-[#8B3846]">About the Author</span>
                <h4 class="font-serif text-xl font-bold text-[#54321A]">Jefna Hameed</h4>
                <p class="text-xs text-stone-600 leading-relaxed">
                    Certified Family Counselor and relationship guidance specialist in Kerala. Dedicated to helping individuals and couples dismantle toxic communication cycles, overcome marital crisis, and nurture emotionally secure homes.
                </p>
                <div class="pt-2 flex flex-wrap items-center gap-3">
                    <button type="button"
                            @click="$dispatch('open-booking-modal')"
                            class="px-4 py-2 bg-[#54321A] text-[#FAF6F0] text-xs font-semibold rounded-xl hover:bg-[#3B2110] transition shadow-xs">
                        Book Session with Jefna 💍
                    </button>
                    <a href="https://wa.me/918590415943" target="_blank" class="px-4 py-2 bg-[#25D366] text-white text-xs font-semibold rounded-xl hover:bg-[#20ba5a] transition">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <!-- 4. RELATED ARTICLES -->
        @if($relatedPosts->isNotEmpty())
            <div class="mt-16 pt-12 border-t border-[#E8DFD3]">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <span class="badge-gold text-xs mb-1">Related Guidance</span>
                        <h3 class="font-serif text-2xl font-bold text-[#54321A]">Continue Reading</h3>
                    </div>
                    <a href="{{ route('blog.index') }}" class="text-xs font-semibold text-[#8B3846] hover:underline">
                        View All Articles →
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedPosts as $rel)
                        <div class="bg-white border border-[#E8DFD3] rounded-2xl overflow-hidden shadow-xs hover:shadow-md transition group flex flex-col justify-between">
                            <div>
                                <div class="relative aspect-[16/10] bg-stone-100 overflow-hidden">
                                    <img src="{{ $rel->display_image }}" alt="{{ $rel->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                </div>
                                <div class="p-4">
                                    <span class="text-[10px] uppercase font-bold text-[#8B3846]">{{ $rel->category }}</span>
                                    <h4 class="font-serif text-sm font-bold text-[#54321A] group-hover:text-[#8B3846] transition mt-1 line-clamp-2">
                                        <a href="{{ route('blog.show', $rel->slug) }}">{{ $rel->title }}</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="p-4 pt-0">
                                <a href="{{ route('blog.show', $rel->slug) }}" class="text-xs font-semibold text-[#54321A] hover:underline inline-flex items-center gap-1">
                                    <span>Read</span> →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</section>

@endsection
