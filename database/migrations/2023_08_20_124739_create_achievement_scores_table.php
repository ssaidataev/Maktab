<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievement_scores', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('achievement_level_id')->index('achievement_scores_achievement_level_id_v');
            $table->integer('achievement_place_id')->index('achievement_scores_achievement_place_id_foreign');
            $table->integer('competition_id')->index('achievement_scores_competition_id_foreign');
            $table->integer('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievement_scores');
    }
};
