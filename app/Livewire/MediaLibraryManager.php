<?php

namespace App\Livewire;

use App\Models\MediaItem;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class MediaLibraryManager extends Component
{
    use WithFileUploads;

    public string $title = '';
    public string $type = 'image'; // image, embed, video
    public string $category = 'Workshops & Events';
    public string $embed_url = '';
    public string $caption = '';
    public string $duration = '';
    public bool $is_featured = false;
    public bool $is_public = true;
    public $file;
    public $thumbnail;

    public ?int $editingId = null;
    public bool $isModalOpen = false;
    public bool $isSuccess = false;
    public string $successMessage = '';

    protected function rules(): array
    {
        return [
            'title' => 'required|min:3|max:200',
            'type' => 'required|in:image,video,embed',
            'category' => 'required|string|max:100',
            'file' => $this->type === 'image' && !$this->editingId ? 'nullable|image|max:10240' : 'nullable|file|max:51200',
            'thumbnail' => 'nullable|image|max:5120',
            'embed_url' => $this->type === 'embed' ? 'required|url|max:500' : 'nullable|max:500',
            'caption' => 'nullable|string|max:1000',
            'duration' => 'nullable|string|max:20',
            'is_featured' => 'boolean',
            'is_public' => 'boolean',
        ];
    }

    public function openCreateModal(): void
    {
        $this->resetForm();
        $this->isModalOpen = true;
    }

    public function closeModal(): void
    {
        $this->isModalOpen = false;
        $this->resetForm();
    }

    public function edit(int $id): void
    {
        $media = MediaItem::findOrFail($id);
        $this->editingId = $media->id;
        $this->title = $media->title;
        $this->type = $media->type;
        $this->category = $media->category;
        $this->embed_url = $media->embed_url ?? '';
        $this->caption = $media->caption ?? '';
        $this->duration = $media->duration ?? '';
        $this->is_featured = $media->is_featured;
        $this->is_public = $media->is_public;
        $this->isModalOpen = true;
    }

    public function save(): void
    {
        $this->validate();

        $filePath = null;
        $thumbnailPath = null;

        if ($this->file) {
            $filePath = $this->file->store('media', 'public');
        }

        if ($this->thumbnail) {
            $thumbnailPath = $this->thumbnail->store('media/thumbnails', 'public');
        }

        if ($this->editingId) {
            $media = MediaItem::findOrFail($this->editingId);
            $data = [
                'title' => $this->title,
                'type' => $this->type,
                'category' => $this->category,
                'embed_url' => $this->embed_url ?: null,
                'caption' => $this->caption,
                'duration' => $this->duration ?: null,
                'is_featured' => $this->is_featured,
                'is_public' => $this->is_public,
            ];

            if ($filePath) {
                $data['file_path'] = $filePath;
            }
            if ($thumbnailPath) {
                $data['thumbnail_path'] = $thumbnailPath;
            }

            $media->update($data);
            $this->successMessage = 'Media item updated successfully!';
        } else {
            // Auto generate slug
            $slug = Str::slug($this->title);
            $count = MediaItem::where('slug', 'LIKE', "{$slug}%")->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }

            MediaItem::create([
                'title' => $this->title,
                'slug' => $slug,
                'type' => $this->type,
                'category' => $this->category,
                'file_path' => $filePath,
                'thumbnail_path' => $thumbnailPath,
                'embed_url' => $this->embed_url ?: null,
                'caption' => $this->caption,
                'duration' => $this->duration ?: null,
                'is_featured' => $this->is_featured,
                'is_public' => $this->is_public,
            ]);

            $this->successMessage = 'New media added successfully to library!';
        }

        $this->isSuccess = true;
        $this->isModalOpen = false;
        $this->resetForm();
    }

    public function delete(int $id): void
    {
        $media = MediaItem::findOrFail($id);
        $media->delete();
        $this->successMessage = 'Media item removed.';
        $this->isSuccess = true;
    }

    public function togglePublic(int $id): void
    {
        $media = MediaItem::findOrFail($id);
        $media->update(['is_public' => !$media->is_public]);
    }

    public function resetForm(): void
    {
        $this->editingId = null;
        $this->title = '';
        $this->type = 'image';
        $this->category = 'Workshops & Events';
        $this->embed_url = '';
        $this->caption = '';
        $this->duration = '';
        $this->file = null;
        $this->thumbnail = null;
        $this->is_featured = false;
        $this->is_public = true;
    }

    public function render()
    {
        $items = MediaItem::orderBy('created_at', 'desc')->get();

        return view('livewire.media-library-manager', [
            'items' => $items,
        ]);
    }
}
