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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_tag'); // e.g. "Couples Therapy Client", "Workshop Attendee", "1-on-1 Client"
            $table->string('location')->nullable(); // e.g. "Kochi / Online", "Calicut", "Dubai / Online"
            $table->unsignedTinyInteger('rating')->default(5);
            $table->text('quote');
            $table->text('quote_ml')->nullable(); // Malayalam quote version if available
            $table->string('service_category')->nullable(); // Relationship, Self-Worth, Anxiety & Stress
            $table->boolean('is_featured')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
