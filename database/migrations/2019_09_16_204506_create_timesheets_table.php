<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no');
            $table->integer('rfid_no');
            $table->integer('sap_id');
            $table->string('name');
            $table->date('date_stamp');
            $table->time('time_stamp');
            $table->integer('rfid_position');
            $table->integer('rfid_status');
            $table->string('rfid_door');
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
        Schema::dropIfExists('timesheets');
    }
}
