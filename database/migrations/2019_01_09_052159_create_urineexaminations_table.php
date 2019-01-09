<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrineexaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urineexaminations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientId');
            $table->string('referredBy');
            $table->string('age');
            $table->string('investigationAdvised');
            $table->string('date');
            $table->string('sample');
            $table->string('quantity');
            $table->string('colour');
            $table->string('spGravity');
            $table->string('reaction');
            $table->string('albumin');
            $table->string('suger');
            $table->string('bileSalts');
            $table->string('bilePigments');
            $table->string('acetone');
            $table->string('benceJonesProteins');
            $table->string('pusCells');
            $table->string('epithellalCells');
            $table->string('crystals');
            $table->string('rbs');
            $table->string('bacteria');
            $table->string('cast');
            $table->string('others');
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
        Schema::dropIfExists('urineexaminations');
    }
}
