<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('task_id');
            $table->string('task_name',50);
            $table->string('task_Acronym',20);
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('before_time');
            $table->integer('after_time');
            $table->integer('late_time');
            $table->string('job_id');
            $table->string('job_type');
            $table->string('rfid_location');
            $table->float('work_hour',2,1);
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
        Schema::dropIfExists('tasks');
    }
}
