<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraColumsToPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function (Blueprint $table) {
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
            $table->string('next_of_kin_phone_number');
            $table->string('next_of_kin_email')->nullable();
            $table->string('next_of_kin_relationship');
            $table->string('next_of_kin_address');
            $table->string('next_of_kin_alternative_phone_number')->nullable();


            $table->text('aspirations')->nullable();
            $table->text('areas_of_interest')->nullable();
            $table->text('skills')->nullable();

            $table->boolean('is_formal_education')->default(false);
            $table->boolean('is_employed')->default(false);
            $table->boolean('is_member')->default(false);
            $table->boolean('is_same_address')->default(false);

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->dropColumn('other_names');
            $table->dropColumn('id_number');
            $table->dropColumn('ethnicity');
            $table->dropColumn('marital_status');
            $table->dropColumn('religion');
            $table->dropColumn('place_of_birth');
            $table->dropColumn('languages');

            $table->dropColumn('next_of_kin_last_name');
            $table->dropColumn('next_of_kin_other_names');
            $table->dropColumn('next_of_kin_id_number');
            $table->dropColumn('next_of_kin_phone_number');
            $table->dropColumn('next_of_kin_email');
            $table->dropColumn('next_of_kin_relationship');
            $table->dropColumn('next_of_kin_address');
            $table->dropColumn('next_of_kin_alternative_phone_number');

            $table->dropColumn('aspirations');
            $table->dropColumn('areas_of_interest');
            $table->dropColumn('skills');

            $table->dropColumn('is_formal_education');
            $table->dropColumn('is_employed');
            $table->dropColumn('is_member');
            $table->dropColumn('is_same_address');




        });
    }
}
