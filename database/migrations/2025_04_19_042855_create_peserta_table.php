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
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama')
            $table->string('jk');
            $table->string('sudut');
            $table->string('kontingen');
            $table->string('kelas');
            $table->foreignId('arena')
                ->constrained('arena')
                ->onDelete('cascade');
            $table->foreignId('partai')
                ->constrained('partai')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
