<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('short_title')->nullable();
            $table->string('department')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_type')->nullable();
            $table->string('office_location')->nullable();
            $table->string('website')->nullable();
            $table->string('skype_username')->nullable();
            $table->string('img')->nullable();
            $table->string('office_hour')->nullable();
            $table->text('bio')->nullable();
            $table->string('degree_type')->nullable();
            $table->string('degree_school')->nullable();
            $table->string('slug')->nullable();
            $table->string('email');
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
        Schema::dropIfExists('profile_tests');
    }
}
