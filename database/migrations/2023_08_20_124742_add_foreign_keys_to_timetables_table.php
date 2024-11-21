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
        Schema::table('timetables', function (Blueprint $table) {
            $table->foreign(['created_by'])->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['education_date_id'])->references(['id'])->on('education_dates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['group_id'])->references(['id'])->on('groups')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['room_id'])->references(['id'])->on('rooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['subject_id'])->references(['id'])->on('subjects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['teacher_id'])->references(['id'])->on('teachers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['time_id'])->references(['id'])->on('times')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['updated_by'])->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('timetables', function (Blueprint $table) {
            $table->dropForeign('timetables_created_by_foreign');
            $table->dropForeign('timetables_education_date_id_foreign');
            $table->dropForeign('timetables_group_id_foreign');
            $table->dropForeign('timetables_room_id_foreign');
            $table->dropForeign('timetables_subject_id_foreign');
            $table->dropForeign('timetables_teacher_id_foreign');
            $table->dropForeign('timetables_time_id_foreign');
            $table->dropForeign('timetables_updated_by_foreign');
        });
    }
};
