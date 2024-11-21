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
        Schema::create('classes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('education_date_id')->index('classes_education_date_id');
            $table->integer('supervisor_id')->index('classes_supervisor_id_foreign');
            $table->integer('room_id')->nullable()->index('classes_room_id');
            $table->integer('number');
            $table->string('literal', 2);
            $table->boolean('is_active')->default(true);
            $table->enum('class_type', ['tj', 'ru', 'uz', 'de', 'en']);
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
        Schema::dropIfExists('classes');
    }
};
