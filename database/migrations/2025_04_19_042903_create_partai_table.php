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
        Schema::create('partai', function (Blueprint $table) {
            $table->id();
            $table->string('partai');
            $table->foreignId('tim_merah_id')
                ->constrained('peserta')
                ->onDelete('cascade');
            $table->foreignId('tim_biru_id')
                ->constrained('peserta')
                ->onDelete('cascade');
            $table->foreignId('kategori_pertandingan_id')
                ->constrained('kategori_pertandingan')
                ->onDelete('cascade');
            $table->string('status_pertandingan');
            $table->string('tgl_pelaksanaan');
            $table->foreignId('pemenang_id')
                ->constrained('peserta')
                ->onDelete('cascade');
            $table->string('status_kemenangan');
            $table->foreignId('arena_id')
                ->constrained('arena')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partai');
    }
};
