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
        Schema::table('achievement_scores', function (Blueprint $table) {
            $table->foreign(['achievement_level_id'], 'achievement_scores_achievement_level_id_v')->references(['id'])->on('achievement_levels')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['achievement_place_id'])->references(['id'])->on('achievement_places')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['competition_id'])->references(['id'])->on('competitions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('achievement_scores', function (Blueprint $table) {
            $table->dropForeign('achievement_scores_achievement_level_id_v');
            $table->dropForeign('achievement_scores_achievement_place_id_foreign');
            $table->dropForeign('achievement_scores_competition_id_foreign');
        });
    }
};
