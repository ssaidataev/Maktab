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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->index('students_user_id_foreign');
            $table->integer('class_id')->index('students_class_id_foreign');
            $table->integer('student_status_id')->index('students_student_status_id_foreign');
            $table->integer('created_by')->nullable()->index('students_created_by_foreign');
            $table->integer('updated_by')->nullable()->index('students_updated_by_foreign');
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
        Schema::dropIfExists('students');
    }
};
