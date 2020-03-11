<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationCatagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_catagories', function (Blueprint $table) {
            $table->bigIncrements('educationCatagoryID');
            $table->string('educationCatagoryName');
            $table->string('educationCatagoryNameBangla');
            $table->integer('educationCatagoryPriority');
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
        Schema::dropIfExists('education_catagories');
    }
}
