<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganisationOrganisationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table to map organisations to organisations (e.g. parent organisation to child organisation)
        Schema::create('organisation_organisation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_organisation_id')->constrained('organisations')->onDelete('cascade');
            $table->foreignId('child_organisation_id')->constrained('organisations')->onDelete('cascade');
            $table->string('membership_type');
            $table->string('duration_of_membership');
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
        Schema::dropIfExists('organisation_organisation');
    }
}
