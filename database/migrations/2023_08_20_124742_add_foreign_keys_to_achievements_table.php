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
        Schema::table('achievements', function (Blueprint $table) {
            $table->foreign(['achievement_level_id'])->references(['id'])->on('achievement_levels')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['achievement_place_id'])->references(['id'])->on('achievement_places')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['competition_id'])->references(['id'])->on('competitions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['subject_id'])->references(['id'])->on('subjects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('achievements', function (Blueprint $table) {
            $table->dropForeign('achievements_achievement_level_id_foreign');
            $table->dropForeign('achievements_achievement_place_id_foreign');
            $table->dropForeign('achievements_competition_id_foreign');
            $table->dropForeign('achievements_subject_id_foreign');
            $table->dropForeign('achievements_user_id_foreign');
        });
    }
};
