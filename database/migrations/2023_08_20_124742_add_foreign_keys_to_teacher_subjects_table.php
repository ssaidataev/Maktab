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
        Schema::table('teacher_subjects', function (Blueprint $table) {
            $table->foreign(['subject_id'])->references(['id'])->on('subjects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['teacher_id'])->references(['id'])->on('teachers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teacher_subjects', function (Blueprint $table) {
            $table->dropForeign('teacher_subjects_subject_id_foreign');
            $table->dropForeign('teacher_subjects_teacher_id_foreign');
        });
    }
};
