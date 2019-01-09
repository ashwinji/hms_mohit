<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemenexaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semenexaminations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientId');
            $table->string('referredBy');
            $table->string('age');
            $table->string('investigationAdvised');
            $table->string('date');
            $table->string('placeOfCollection');
            $table->string('timeOfCollectionInLab');
            $table->string('quantity');
            $table->string('consistency');
            $table->string('colour');
            $table->string('ph');
            $table->string('liquficationTime');
            $table->string('viscocity');
            $table->string('count');
            $table->string('motility');
            $table->string('abnormalForms');
            $table->string('pusCells');
            $table->string('epithelialCells');
            $table->string('rbcs');
            $table->string('fructoseTest');
            $table->text('other');
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
        Schema::dropIfExists('semenexaminations');
    }
}
