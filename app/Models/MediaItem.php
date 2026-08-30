<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MediaItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'type',
        'category',
        'file_path',
        'thumbnail_path',
        'embed_url',
        'caption',
        'duration',
        'is_featured',
        'is_public',
        'sort_order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_public' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function getDisplayUrlAttribute(): string
    {
        if ($this->file_path) {
            if (Str::startsWith($this->file_path, ['http://', 'https://', '/'])) {
                return $this->file_path;
            }
            return asset('storage/' . $this->file_path);
        }

        return $this->embed_url ?? asset('images/jefna-hameed.webp');
    }

    public function getDisplayThumbnailAttribute(): string
    {
        if ($this->thumbnail_path) {
            if (Str::startsWith($this->thumbnail_path, ['http://', 'https://', '/'])) {
                return $this->thumbnail_path;
            }
            return asset('storage/' . $this->thumbnail_path);
        }

        return $this->display_url;
    }

    public function getYoutubeEmbedUrlAttribute(): ?string
    {
        if (!$this->embed_url) {
            return null;
        }

        // Parse YouTube standard & short URLs
        if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))([\w-]{11})/', $this->embed_url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1] . '?autoplay=1&rel=0';
        }

        return $this->embed_url;
    }
}
