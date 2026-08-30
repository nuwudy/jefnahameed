<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('type')->default('image'); // image, video, embed
            $table->string('category')->default('Workshops & Events'); // Workshops & Events, Relationship Guidance, Counselling, Moments
            $table->string('file_path')->nullable(); // uploaded file path in storage
            $table->string('thumbnail_path')->nullable(); // thumbnail for videos/images
            $table->string('embed_url')->nullable(); // youtube, vimeo, reels or external link
            $table->text('caption')->nullable();
            $table->string('duration')->nullable(); // e.g. "03:45" for videos
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_public')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_items');
    }
};
