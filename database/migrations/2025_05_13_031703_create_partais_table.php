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
        Schema::create('partais', function (Blueprint $table) {
            $table->id();
            $table->string('partai');
            $table->foreignId('atlit_merah_id')
                ->constrained('atlits')
                ->onDelete('cascade');
            $table->foreignId('atlit_biru_id')
                ->constrained('atlits')
                ->onDelete('cascade');
            $table->foreignId('kategori_pertandingan_id')
                ->constrained('kategori_pertandingans')
                ->onDelete('cascade');
            $table->string('status_pertandingan');
            $table->string('tgl_pelaksanaan');
            $table->foreignId('pemenang_id')
                ->constrained('atlits')
                ->onDelete('cascade');
            $table->string('status_kemenangan');
            $table->foreignId('arena_id')
                ->constrained('arenas')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partais');
    }
};
