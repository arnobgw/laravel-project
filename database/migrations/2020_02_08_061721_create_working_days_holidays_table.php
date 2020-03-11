<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingDaysHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_days_holidays', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('monthYear');
            $table->integer('totalFridays');
            $table->integer('totalGHDays');
            $table->integer('totalAdjustDays');            
            $table->integer('totalHolidays');
            $table->integer('totalWorkingDays');
            $table->integer('totalMonthDays');
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
        Schema::dropIfExists('working_days_holidays');
    }
}
