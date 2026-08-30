<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'badge',
        'description',
        'curriculum',
        'duration',
        'schedule',
        'fee',
        'original_fee',
        'language',
        'target_audience',
        'upcoming_batches',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'curriculum' => 'array',
        'upcoming_batches' => 'array',
        'fee' => 'decimal:2',
        'original_fee' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function registrations(): HasMany
    {
        return $this->hasMany(WorkshopRegistration::class);
    }
}
