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
            $table->string('patientTitle')->nullable();
            $table->string('patientName')->nullable();
            $table->string('regNum')->nullable();
            $table->string('regDate')->nullable();
            $table->string('regAmount')->nullable();
            $table->string('address')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('contactNum')->nullable();
            $table->text('consultant')->nullable();
            $table->string('otherConsultant')->nullable();
            $table->text('department')->nullable();
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
