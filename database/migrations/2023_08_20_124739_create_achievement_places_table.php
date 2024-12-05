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
        Schema::create('achievement_places', function (Blueprint $table) {
            $table->integer('id', true)->primary();
            $table->string('name', 45)->nullable();
            $table->string('description', 100)->nullable();
            $table->boolean('is_active')->nullable();
            $table->string('icon', 145)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('achievement_places');
    }
};
