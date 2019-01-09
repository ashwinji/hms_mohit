<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpdtreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opdtreatments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientId');
            $table->string('refTo');
            $table->text('complaint');
            $table->text('treatment');
            $table->string('medicine');
            $table->string('potency');
            $table->string('nod');
            $table->text('advice');
            $table->text('remark');
            $table->string('consultant');
            $table->timestamps('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opdtreatments');
    }
}
