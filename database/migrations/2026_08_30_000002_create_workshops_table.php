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
        Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('subtitle')->nullable();
            $table->string('badge')->nullable(); // e.g. "Live Interactive Masterclass"
            $table->text('description')->nullable();
            $table->json('curriculum')->nullable(); // array of learning points
            $table->string('duration')->nullable(); // e.g. "2 Hours Live + Q&A"
            $table->string('schedule')->nullable(); // e.g. "Upcoming Weekend Batch"
            $table->decimal('fee', 10, 2)->default(0);
            $table->decimal('original_fee', 10, 2)->nullable();
            $table->string('language')->default('Malayalam & English');
            $table->string('target_audience')->nullable(); // e.g. "Women & Young Adults"
            $table->json('upcoming_batches')->nullable(); // list of batch dates/times
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workshops');
    }
};
