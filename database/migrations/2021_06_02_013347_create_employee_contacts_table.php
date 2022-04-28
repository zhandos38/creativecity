<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name_ru', '255');
            $table->string('full_name_kz', '255');
            $table->string('full_name_en', '255');
            $table->string('position_ru', '255');
            $table->string('position_kz', '255');
            $table->string('position_en', '255');
            $table->string('phone', '255')->nullable();
            $table->string('email', '255')->nullable();
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
        Schema::dropIfExists('employee_contacts');
    }
}
