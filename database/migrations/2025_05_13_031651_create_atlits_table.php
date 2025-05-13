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
        Schema::create('atlits', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('no_peserta')->unique();
            $table->string('nama');
            $table->string('jk');
            $table->string('kontingen');
            $table->string('kelas');
            $table->string('status')->default('aktif');
            $table->mediumText('foto')
                ->charset('binary')
                ->nullable();
            $table->string('image_type')
                ->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atlits');
    }
};
