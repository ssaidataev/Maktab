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
        Schema::create('timetables', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('group_id')->index('timetables_group_id_foreign');
            $table->integer('teacher_id')->nullable()->index('timetables_teacher_id_foreign');
            $table->integer('subject_id')->index('timetables_subject_id_foreign');
            $table->integer('room_id')->nullable()->index('timetables_room_id_foreign');
            $table->integer('time_id')->index('timetables_time_id_foreign');
            $table->integer('education_date_id')->index('timetables_education_date_id_foreign');
            $table->integer('day_of_week');
            $table->integer('half');
            $table->integer('created_by')->nullable()->index('timetables_created_by_foreign');
            $table->integer('updated_by')->nullable()->index('timetables_updated_by_foreign');
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
        Schema::dropIfExists('timetables');
    }
};
