<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru', 255);
            $table->string('title_kz', 255);
            $table->string('title_en', 255);
            $table->string('description_ru', 1000)->nullable();
            $table->string('description_kz', 1000)->nullable();
            $table->string('description_en', 1000)->nullable();
            $table->string('button_text_ru', 50);
            $table->string('button_text_kz', 50);
            $table->string('button_text_en', 50);
            $table->string('link', 500);
            $table->string('image', 500);
            $table->string('bg_image', 500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
