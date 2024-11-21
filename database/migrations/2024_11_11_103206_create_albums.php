<?php

use App\Models\Band;
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
        Schema::create('albums', function (Blueprint $table) {
            $table->id(); // Creates an unsignedBigInteger primary key
            $table->foreignId('band_id')->constrained('bands')->cascadeOnDelete(); // Explicitly defining the foreign key
            $table->string('name'); // Not null by default
            $table->integer('year')->nullable(); // Year is nullable
            $table->integer('times_sold')->nullable(); // Times sold is nullable
            $table->timestamps(); // Adds created_at and updated_at timestamps
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
