<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysiotherpiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physiotherpies', function (Blueprint $table) {
          $table->increments('id');
          $table->string('patientId');
          $table->string('referredBy');
          $table->string('age');
          $table->text('investigationAdvised');
          $table->string('phyadate');
          $table->string('disease');
          $table->string('therapy');
          $table->string('other');
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
        Schema::dropIfExists('physiotherpies');
    }
}
