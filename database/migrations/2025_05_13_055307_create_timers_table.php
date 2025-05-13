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
        Schema::create('timers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pertandingan_id')
                ->constrained('pertandingans')
                ->onDelete('cascade');
            $table->foreignId('timer_id')
                ->constrained('roles')
                ->onDelete('cascade');
            $table->string('status_timer')->default('none');
            $table->string('waktu')->default('00:00:00');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timers');
    }
};
