<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOTStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('o_t_statuses', function (Blueprint $table) {
            $table->bigIncrements('otStatusID');
            $table->string('otStatusName');
            $table->string('otStatusNameBangla');
            $table->integer('otStatusPriority');
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
        Schema::dropIfExists('o_t_statuses');
    }
}
