<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerumofwidalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serumofwidals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientId');
            $table->string('referredBy');
            $table->string('age');
            $table->string('investigationAdvised');
            $table->string('date');
            $table->string('sTyphiO');
            $table->string('sTyphiH');
            $table->string('sTyphiAH');
            $table->string('sTyphiBH');
            $table->text('impression');
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
        Schema::dropIfExists('serumofwidals');
    }
}
