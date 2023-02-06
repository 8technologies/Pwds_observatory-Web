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
        Schema::create('news_and_events', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->string('banner_image');
            $table->string('title');
            $table->longText('details');
            $table->string('type');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('venue')->nullable();
            $table->string('regestration_fee')->nullable();
            $table->string('event_url')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_and_events');
    }
};
