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
        Schema::create('basketball_schedules', function (Blueprint $table) {
            $table->id();
            $table->string('category'); // male | female
            $table->string('phase'); // semi | final | group
            $table->string('team_a');
            $table->string('team_b');
            $table->string('venue');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('day');
            $table->integer('score_a')->nullable();
            $table->integer('score_b')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basketball_schedules');
    }
};
