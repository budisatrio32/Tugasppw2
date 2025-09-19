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
        Schema::create('pertandingan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pertandingan')->unique();
            $table->dateTime('tanggal');
            $table->string('home_team');
            $table->string('away_team');
            $table->string('stadion');
            $table->string('liga');
            $table->string('musim');
            $table->integer('harga_tiket'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
