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
        Schema::create('journals', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('create_by_user_id')->index('journals_create_by_user_id_foreign');
            $table->integer('student_id')->index('journals_student_id_foreign');
            $table->integer('timetable_id')->index('journals_timetable_id_foreign');
            $table->integer('mark_id')->index('journals_mark_id_foreign');
            $table->integer('mark_type_id')->index('journals_mark_type_id_foreign');
            $table->integer('education_plan_id')->index('journals_education_plan_id_foreign');
            $table->integer('homework_id')->nullable()->index('journals_homework_id_foreign');
            $table->string('comment', 100)->nullable();
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
        Schema::dropIfExists('journals');
    }
};
