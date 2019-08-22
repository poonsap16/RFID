<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('activity_id');
            $table->string('activity_name');
            $table->string('activity_Acronym');
            $table->time('start_time');
            $table->time('end_time');
            $table->time('before_time');
            $table->time('after_time');
            $table->time('late_time');
            $table->string('job_id');
            $table->string('job_type');
            $table->string('person_type');
            $table->string('rfid_location');
            $table->integer('work_hour');
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
        Schema::dropIfExists('activities');
    }
}
