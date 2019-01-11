<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opds', function (Blueprint $table) {
            $table->increments('orderId');
            $table->string('id');
            $table->string('patientTitle');
            $table->string('patientName');
            $table->string('regNum');
            $table->string('regDate');
            $table->string('regAmount')->nullable();
            $table->string('address');
            $table->string('age');
            $table->string('gender');
            $table->string('contactNum')->nullable();
            $table->text('consultant');
            $table->string('otherConsultant');
            $table->text('department');
            $table->enum('patientType',array('O','N'))->nullable();
            $table->enum('patientTypeIpd',array('O','N'))->nullable();
            $table->enum('dltStatus',array('O','N'))->nullable();
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
        Schema::dropIfExists('opds');
    }
}
