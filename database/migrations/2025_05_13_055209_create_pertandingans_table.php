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
        Schema::create('pertandingans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partai_id')
                ->constrained('partais')
                ->onDelete('cascade');
            $table->foreignId('dewan_juri_id')
                ->constrained('roles')
                ->onDelete('cascade');
            $table->foreignId('juri_id')
                ->constrained('roles')
                ->onDelete('cascade');
            $table->foreignId('operator_id')
                ->constrained('roles')
                ->onDelete('cascade');
            $table->foreignId('timer_id')
                ->constrained('roles')
                ->onDelete('cascade');
            $table->string('status_pertandingan')->default('none');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertandingans');
    }
};
