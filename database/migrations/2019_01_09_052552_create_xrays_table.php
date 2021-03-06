<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXraysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xrays', function (Blueprint $table) {
          $table->increments('id');
          $table->string('patientId');
          $table->string('referredBy')->nullable();
          $table->string('age')->nullable();
          $table->text('investigationAdvised')->nullable();
          $table->string('date')->nullable();
          $table->string('description')->nullable();
          $table->string('remark')->nullable();
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
        Schema::dropIfExists('xrays');
    }
}
