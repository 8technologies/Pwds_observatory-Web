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


        });
    }
}
