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
            $table->string('job_location')->nullable();
            $table->float('job_hourly_price')->nullable();
            $table->float('job_duration')->nullable();
            $table->boolean('is_active')->default(1);
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
