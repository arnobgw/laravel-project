<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeCatagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_catagories', function (Blueprint $table) {
            $table->bigIncrements('employeeCatagoryID');
            $table->string('employeeCatagoryName');
            $table->string('employeeCatagoryNameBangla');
            $table->integer('employeeCatagoryPriority');
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
        Schema::dropIfExists('employee_catagories');
    }
}
