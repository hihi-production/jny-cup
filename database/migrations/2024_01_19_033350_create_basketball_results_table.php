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
        Schema::create('basketball_results', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('team_a');
            $table->string('team_b');
            $table->string('venue');
            $table->string('score_a');
            $table->string('score_b');
            $table->string('phase'); // group | semi | final
            $table->string('day');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basketball_results');
    }
};
