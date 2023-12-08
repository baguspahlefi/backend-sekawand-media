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
        Schema::create('penyetuju', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kendaraan_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('approve')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyetuju');
    }
};
