<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('content_ru', 1000);
            $table->string('content_kz', 1000);
            $table->string('content_en', 1000);
            $table->enum('type', ['phone', 'email', 'address', 'fb', 'instagram', 'vk', 'whatsapp', 'cabinet', 'text', 'presentation']);
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
        Schema::dropIfExists('contacts');
    }
}
