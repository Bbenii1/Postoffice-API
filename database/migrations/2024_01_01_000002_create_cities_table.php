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
        Schema::create('cities', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->foreignId('county_id')
                ->constrained('counties', 'id')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->unsignedInteger('population'); // rounded to nearest 100
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
