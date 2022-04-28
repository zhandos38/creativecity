<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title_ru', 255);
            $table->string('title_kz', 255);
            $table->string('title_en', 255);
            $table->string('description_ru', 1000)->nullable();
            $table->string('description_kz', 1000)->nullable();
            $table->string('description_en', 1000)->nullable();
            $table->string('tags_ru', 255);
            $table->string('tags_kz', 255);
            $table->string('tags_en', 255);
            $table->string('image', 500);
            $table->string('file', 500)->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
