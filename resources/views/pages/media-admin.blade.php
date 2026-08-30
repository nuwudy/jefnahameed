@extends('layouts.app')

@section('title', 'Media Library Manager | Jefna Hameed')

@section('content')
<section class="py-12 bg-[#F7F3EE] min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6 flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-xs font-semibold text-[#3B4E3B] hover:underline flex items-center gap-1">
                ← Back to Home
            </a>
            <a href="{{ route('media.index') }}" target="_blank" class="text-xs font-semibold text-[#7A3528] hover:underline flex items-center gap-1">
                View Live Gallery ↗
            </a>
        </div>

        <livewire:media-library-manager />
    </div>
</section>
@endsection
