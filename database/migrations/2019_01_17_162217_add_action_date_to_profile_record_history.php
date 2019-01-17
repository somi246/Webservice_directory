<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActionDateToProfileRecordHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profile_record_history', function (Blueprint $table) {
            $table->timestamp('action_date')->nullable();
            $table->renameColumn('submitted_at', 'submitted_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profile_record_history', function (Blueprint $table) {
            //
        });
    }
}
