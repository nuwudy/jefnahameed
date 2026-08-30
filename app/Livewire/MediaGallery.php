<?php

namespace App\Livewire;

use App\Models\MediaItem;
use Livewire\Component;

class MediaGallery extends Component
{
    public string $selectedCategory = 'All';
    public string $selectedType = 'all'; // all, image, video
    public ?int $activeMediaId = null;
    public bool $isLightboxOpen = false;

    public function filterCategory(string $category): void
    {
        $this->selectedCategory = $category;
    }

    public function filterType(string $type): void
    {
        $this->selectedType = $type;
    }

    public function openLightbox(int $mediaId): void
    {
        $this->activeMediaId = $mediaId;
        $this->isLightboxOpen = true;
    }

    public function closeLightbox(): void
    {
        $this->isLightboxOpen = false;
        $this->activeMediaId = null;
    }

    public function render()
    {
        $query = MediaItem::where('is_public', true);

        if ($this->selectedCategory !== 'All') {
            $query->where('category', $this->selectedCategory);
        }

        if ($this->selectedType !== 'all') {
            if ($this->selectedType === 'video') {
                $query->whereIn('type', ['video', 'embed']);
            } else {
                $query->where('type', $this->selectedType);
            }
        }

        $mediaItems = $query->orderBy('sort_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->get();

        $categories = ['All', 'Workshops & Events', 'Relationship Guidance', 'Counselling & Therapy', 'Moments & Talks'];

        $activeMedia = $this->activeMediaId ? MediaItem::find($this->activeMediaId) : null;

        return view('livewire.media-gallery', [
            'mediaItems' => $mediaItems,
            'categories' => $categories,
            'activeMedia' => $activeMedia,
        ]);
    }
}
