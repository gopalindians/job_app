<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtherColumnsToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->bigInteger('job_posted_by')->unsigned();
            $table->string('job_location');
            $table->float('job_hourly_price');
            $table->float('job_duration');
            $table->boolean('is_active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('job_posted_by')->unsigned();
            $table->dropColumn('job_location');
            $table->dropColumn('job_hourly_price');
            $table->dropColumn('job_duration');
            $table->dropColumn('is_active');
        });
    }
}
