<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("registration_number");
            $table->string("date_of_registration");
            $table->text("mission");
            $table->text("vision");
            $table->text("core_values");
            $table->text("brief_profile");
            $table->enum("membership_type", ["member", "pwd"]);
            $table->string("physical_address");
            $table->json("contact_persons");
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
        Schema::dropIfExists('organisations');
    }
}
