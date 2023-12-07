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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->char('nopol');
            $table->char('nama_kendaraan');
            $table->string('jenis_kendaraan');
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('region');
            $table->string('bbm');
            $table->string('jadwal_service');
            $table->string('jumlah');
            $table->string('deskripsi');
            $table->string('driver');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
