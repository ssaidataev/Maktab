<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\Fortify\Fortify;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('first_name', 45);
            $table->string('last_name', 45);
            $table->string('middle_name', 45)->nullable();
            $table->string('username', 45)->unique('username_UNIQUE');
            $table->string('email', 45)->nullable()->unique('email_UNIQUE');
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password');
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
            $table->rememberToken();
            $table->boolean('gender');
            $table->string('phone', 30)->nullable()->unique('phone_UNIQUE');
            $table->date('birth_date');
            $table->string('address');
            $table->boolean('is_active')->nullable()->default(true);
            $table->boolean('is_access')->nullable()->default(true);
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
        Schema::dropIfExists('users');
    }
};
