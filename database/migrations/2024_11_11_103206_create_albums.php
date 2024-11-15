<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Maak een migration aan voor de tabel “albums”. Een album
     * bevat de volgende attributen: id (pkey, AI, int), name (string,
     * not null), year (int, lengte 4, nullable) en times_sold (int,nullable)
     * Maak een seeder voor bands en zorg dat er minimaal 3 bands in de database komen te staan.

     */
    public function up(): void
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->primary(true);
            $table->string('name')->notNull(true);
            $table->integer('year')->notnull(true)->limit(4);
            $table->integer('times_sold')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
