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
        Schema::create('achievements', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('subject_id')->index('achievements_subject_id_foreign');
            $table->integer('achievement_level_id')->index('achievements_achievement_level_id_foreign');
            $table->integer('achievement_place_id')->index('achievements_achievement_place_id_foreign');
            $table->integer('competition_id')->index('achievements_competition_id_foreign');
            $table->integer('user_id')->index('achievements_user_id_foreign');
            $table->string('title', 45);
            $table->string('description');
            $table->string('photo', 45);
            $table->boolean('is_active')->default(true);
            $table->date('accepted_at');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievements');
    }
};
