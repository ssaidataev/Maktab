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
        Schema::table('journals', function (Blueprint $table) {
            $table->foreign(['create_by_user_id'])->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['education_plan_id'])->references(['id'])->on('education_plans')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['homework_id'])->references(['id'])->on('homeworks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['mark_id'])->references(['id'])->on('marks')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['mark_type_id'])->references(['id'])->on('mark_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['student_id'])->references(['id'])->on('students')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['timetable_id'])->references(['id'])->on('timetables')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('journals', function (Blueprint $table) {
            $table->dropForeign('journals_create_by_user_id_foreign');
            $table->dropForeign('journals_education_plan_id_foreign');
            $table->dropForeign('journals_homework_id_foreign');
            $table->dropForeign('journals_mark_id_foreign');
            $table->dropForeign('journals_mark_type_id_foreign');
            $table->dropForeign('journals_student_id_foreign');
            $table->dropForeign('journals_timetable_id_foreign');
        });
    }
};
