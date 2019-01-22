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
          $table->string('patientId')->nullable();
          $table->string('referredBy')->nullable();
          $table->string('age')->nullable();
          $table->text('investigationAdvised')->nullable();
          $table->string('phyadate')->nullable();
          $table->string('disease')->nullable();
          $table->string('therapy')->nullable();
          $table->string('other')->nullable();
          $table->text('remark')->nullable();
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
