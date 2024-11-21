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
        Schema::create('teacher_specialities', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('teacher_id')->nullable()->index('teacher_specialities_teacher_id_foreign');
            $table->integer('speciality_id')->nullable()->index('teacher_specialities_speciality_id_foreign');
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
        Schema::dropIfExists('teacher_specialities');
    }
};
