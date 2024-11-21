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
        Schema::create('menus', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('menu_parent_id')->nullable()->index('menus_menu_parent_id_foreign');
            $table->integer('page_id')->nullable()->index('menus_page_id_foreign');
            $table->string('name', 45);
            $table->string('icon', 45)->nullable();
            $table->integer('order')->nullable();
            $table->boolean('is_target')->default(false);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('menus');
    }
};
