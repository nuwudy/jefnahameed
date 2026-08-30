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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('service_type')->default('Individual Therapy'); // Couple/Family, 1-on-1 Clinical, Boundary Coaching, Workshop
            $table->string('preferred_slot')->nullable(); // Morning, Afternoon, Evening, Weekend
            $table->text('message')->nullable();
            $table->string('session_mode')->default('Online (Video/Audio)'); // Online, In-Person
            $table->string('status')->default('new'); // new, contacted, scheduled, completed, cancelled
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
