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
        Schema::create('Jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('id_pertandingan');
            $table->date('tanggal');
            $table->string('id_awayteam');
            $table->string('id_home_team');
            $table->string('id_stadion');
            $table->string('id_liga');
            $table->string('id_musim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
