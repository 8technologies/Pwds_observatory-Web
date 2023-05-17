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
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->text("mission");
            $table->text("vision");
            $table->text("core_values");
            $table->text("brief_profile");
            // $table->string("type"); // (association, group, cooperative, company, etc
            $table->enum("membership_type", ["member", "pwd", "both"]);

            $table->string("physical_address");
            $table->json('attachments')->nullable();
            $table->string('logo')->nullable();
            $table->string('certificate_of_registration')->nullable();

            $table->string('admin_email')->nullable();
            $table->date('valid_from')->nullable();
            $table->date('valid_to')->nullable();
            $table->string('relationship_type')->nullable(); // du, opd
            $table->string('parent_organisation_id')->nullable();


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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('organisations');
        Schema::enableForeignKeyConstraints();
    }
}
