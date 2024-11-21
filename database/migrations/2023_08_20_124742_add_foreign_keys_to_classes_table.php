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
        Schema::table('classes', function (Blueprint $table) {
            $table->foreign(['education_date_id'], 'classes_education_date_id')->references(['id'])->on('education_dates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['room_id'], 'classes_room_id')->references(['id'])->on('rooms')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['supervisor_id'])->references(['id'])->on('teachers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropForeign('classes_education_date_id');
            $table->dropForeign('classes_room_id');
            $table->dropForeign('classes_supervisor_id_foreign');
        });
    }
};
