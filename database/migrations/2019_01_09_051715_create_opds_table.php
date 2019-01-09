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
            $table->string('id');
            $table->integer('orderId');
            $table->string('patientTitle');
            $table->string('patientName');
            $table->string('regNum');
            $table->string('regDate');
            $table->string('regAmount');
            $table->string('address');
            $table->string('age');
            $table->string('gender');
            $table->string('contactNum');
            $table->text('consultant');
            $table->string('otherConsultant');
            $table->text('department');
            $table->enum('patientType',array('O','N'));
            $table->enum('patientTypeIpd',array('O','N'));
            $table->enum('dltStatus',array('O','N'));
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
