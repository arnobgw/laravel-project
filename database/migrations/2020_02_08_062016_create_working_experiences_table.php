<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_experiences', function (Blueprint $table) {
            $table->bigIncrements('workingExperienceID');
            $table->string('workingExperienceName');
            $table->string('workingExperienceNameBangla');
            $table->string('workDetails');
            $table->integer('workingExperiencePriority');
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
        Schema::dropIfExists('working_experiences');
    }
}
