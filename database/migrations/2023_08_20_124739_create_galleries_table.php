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
        Schema::create('galleries', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('gallery_category_id')->nullable()->index('galleries_gallery_category_id_foreign');
            $table->string('title', 45);
            $table->tinyText('description')->nullable();
            $table->string('image', 45);
            $table->integer('created_by')->nullable()->index('galleries_created_by_foreign');
            $table->integer('updated_by')->nullable()->index('galleries_updated_by_foreign');
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
        Schema::dropIfExists('galleries');
    }
};
