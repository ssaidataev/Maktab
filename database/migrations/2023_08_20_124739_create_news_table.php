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
        Schema::create('news', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('news_category_id')->nullable()->index('news_news_category_id');
            $table->string('title', 45);
            $table->tinyText('description');
            $table->longText('text');
            $table->string('image', 45);
            $table->string('is_active', 45);
            $table->string('tags')->nullable();
            $table->dateTime('publish_date');
            $table->integer('created_by')->nullable()->index('news_created_by_foreign');
            $table->integer('updated_by')->nullable()->index('news_updated_by_foreign');
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
        Schema::dropIfExists('news');
    }
};
