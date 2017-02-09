<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterReminderTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Reminder', function (Blueprint $table) {
            $table->integer('ReminderType')->unsigned()->nullable();

            $table->foreign('ReminderType')->references('id')->on('Reminder');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Reminder', function (Blueprint $table) {
            //
        });
    }
}
