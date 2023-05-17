<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text('name')->nullable();
            $table->string('address')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('email')->nullable();
            $table->text('phone_number_2')->nullable();
            $table->text('dob')->nullable();
            $table->text('sex')->nullable();
            $table->text('photo')->nullable();

            $table->string('other_names');
            $table->string('id_number'); // National ID, Passport, etc
            $table->string('ethnicity');
            $table->string('marital_status');
            $table->string('religion');
            $table->string('place_of_birth'); // Hospital, Home, etc
            $table->string('languages'); // JSON array of languages

            $table->string('next_of_kin_last_name');
            $table->string('next_of_kin_other_names');
            $table->string('next_of_kin_id_number')->nullable();
            $table->enum('next_of_kin_gender',['Male','Female']);
            $table->string('next_of_kin_phone_number');
            $table->string('next_of_kin_email')->nullable();
            $table->string('next_of_kin_relationship');
            $table->string('next_of_kin_address');
            $table->string('next_of_kin_alternative_phone_number')->nullable();

            $table->string('employer');
            $table->string('position');
            $table->string('year_of_employment');

            $table->string('organisation_name');
            $table->string('Year_of_membership');

            $table->text('aspirations')->nullable();
            $table->text('areas_of_interest')->nullable();
            $table->text('skills')->nullable();            

            $table->boolean('is_formal_education')->default(false);
            $table->boolean('is_employed')->default(false);
            $table->boolean('is_member')->default(false);
            $table->boolean('is_same_address')->default(false);
            $table->boolean('is_formerly_employed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('people');
        Schema::enableForeignKeyConstraints();
    }
}
