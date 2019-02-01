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
            $table->string('referredBy')->nullable();
            $table->string('age')->nullable();
            $table->string('investigationAdvised')->nullable();
            $table->string('date')->nullable();
            $table->string('placeOfCollection')->nullable();
            $table->string('timeOfCollectionInLab')->nullable();
            $table->string('quantity')->nullable();
            $table->string('consistency')->nullable();
            $table->string('colour')->nullable();
            $table->string('ph')->nullable();
            $table->string('liquficationTime')->nullable();
            $table->string('viscocity')->nullable();
            $table->string('count')->nullable();
            $table->string('motility')->nullable();
            $table->string('abnormalForms')->nullable();
            $table->string('pusCells')->nullable();
            $table->string('epithelialCells')->nullable();
            $table->string('rbcs')->nullable();
            $table->string('fructoseTest')->nullable();
            $table->text('other')->nullable();
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
