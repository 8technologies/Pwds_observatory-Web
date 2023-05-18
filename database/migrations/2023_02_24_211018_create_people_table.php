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
            $table->foreignId('district_of_origin')->nullable()->constrained('districts');

            $table->string('other_names')->nullable();
            $table->string('id_number')->nullable(); // National ID, Passport, etc
            $table->string('ethnicity')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('place_of_birth')->nullable(); // Hospital, Other
            $table->string("birth_hospital")->nullable();
            $table->string('languages')->nullable(); // JSON array of languages

            $table->string('next_of_kin_last_name')->nullable();
            $table->string('next_of_kin_other_names')->nullable();
            $table->string('next_of_kin_id_number')->nullable();
            $table->enum('next_of_kin_gender',['Male','Female'])->nullable();
            $table->string('next_of_kin_phone_number')->nullable();
            $table->string('next_of_kin_email')->nullable();
            $table->string('next_of_kin_relationship')->nullable();
            $table->string('next_of_kin_address')->nullable();
            $table->string('next_of_kin_alternative_phone_number')->nullable();

            $table->string('employer')->nullable();
            $table->string('position')->nullable();
            $table->string('year_of_employment')->nullable();

            $table->string('organisation_name')->nullable();
            $table->string('Year_of_membership')->nullable();

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
