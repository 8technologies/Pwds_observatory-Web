<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUssdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ussds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('session_id')->nullable();
            $table->string('service_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('response')->nullable();
            $table->string('action')->default('start')->nullable();
            $table->text('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ussds');
    }
}
