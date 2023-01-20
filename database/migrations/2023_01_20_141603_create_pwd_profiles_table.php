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
        Schema::create('pwd_profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->string('gender');
            $table->string('dob');
            $table->string('disability_type');
            $table->string('employment_type');
            $table->string('education_level');
            $table->string('district')->nullable();
            $table->string('nok')->nullable();
            $table->string('nok_relationship')->nullable();
            $table->string('nok_contact')->nullable();
            $table->string('has_care_giver')->default("No");
            $table->string('care_giver_name')->nullable();
            $table->string('care_giver_contact')->nullable();
            $table->string('care_giver_relationship')->nullable();
            $table->string('care_giver_dob')->nullable();
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
        Schema::dropIfExists('pwd_profiles');
    }
};
