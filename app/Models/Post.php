<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'excerpt',
        'body',
        'cover_image',
        'read_time',
        'is_featured',
        'is_published',
        'published_at',
        'meta_title',
        'meta_description',
    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true)->orderBy('published_at', 'desc');
    }

    public function getDisplayImageAttribute(): string
    {
        if ($this->cover_image && (str_starts_with($this->cover_image, 'http') || str_starts_with($this->cover_image, '/images/'))) {
            return asset(ltrim($this->cover_image, '/'));
        }

        if ($this->cover_image) {
            return asset('storage/' . $this->cover_image);
        }

        return asset('images/gallery/luxury-resort-connection.webp');
    }
}
