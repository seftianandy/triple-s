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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pertandingan_id')
                ->constrained('pertandingans')
                ->onDelete('cascade');
            $table->foreignId('kategori_penilaian_id')
                ->constrained('kategori_penilaians')
                ->onDelete('cascade');
            $table->foreignId('penilai_id')
                ->constrained('roles')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
