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
        Schema::table('pwd_profiles', function (Blueprint $table) {
            $table->dropColumn('district');
            $table->uuid('district_organisation')->nullable()->after('user_id');
            $table->foreign('district_organisation')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pwd_profiles', function (Blueprint $table) {
            $table->string('district')->nullable()->after('education_level');
            $table->dropColumn('district_organisation');
        });    
    }
};
