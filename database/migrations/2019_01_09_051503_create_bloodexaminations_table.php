<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodexaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloodexaminations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientId');
            $table->string('referredBy');
            $table->string('age');
            $table->string('investigationAdvised');
            $table->string('date');
            $table->string('haemoglobin');
            $table->string('totalRBCCount');
            $table->string('totalWBCCount');
            $table->string('polymorphs');
            $table->string('lymphocytes');
            $table->string('eosinophils');
            $table->string('monocytes');
            $table->string('basophils');
            $table->string('ers');
            $table->string('plateletCount');
            $table->string('reticulocytes');
            $table->string('pcv');
            $table->string('mcv');
            $table->string('mch');
            $table->string('mchc');
            $table->string('bleedingTime');
            $table->string('clottingTime');
            $table->string('malarialParasite');
            $table->text('remark');
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
        Schema::dropIfExists('bloodexaminations');
    }
}
