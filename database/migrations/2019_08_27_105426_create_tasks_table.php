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
            $table->integer('task_job_id');
            $table->string('task_name',50);
            $table->string('task_Acronym',20);
            $table->time('start_time');
            $table->time('end_time');
            $table->time('before_time');
            $table->time('after_time');
            $table->time('late_time');
            $table->string('job_id');
            $table->string('job_type');
            $table->integer('rfid_machine_id');
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
