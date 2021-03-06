<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralbloodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generalbloods', function (Blueprint $table) {
          $table->increments('id');
          $table->string('patientId');
          $table->string('referredBy')->nullable();
          $table->string('age')->nullable();
          $table->text('investigationAdvised')->nullable();
          $table->string('date')->nullable();
          $table->string('bloodFasting')->nullable();
          $table->string('bloodRandom')->nullable();
          $table->string('bloodPP')->nullable();
          $table->string('urea')->nullable();
          $table->string('creatinine')->nullable();
          $table->string('uricAcid')->nullable();
          $table->string('totalBilirubin')->nullable();
          $table->string('directBilirubin')->nullable();
          $table->string('sgptAlt')->nullable();
          $table->string('sgotAst')->nullable();
          $table->string('alkPhosphatase')->nullable();
          $table->string('totalProtein')->nullable();
          $table->string('albumin')->nullable();
          $table->string('agRatio')->nullable();
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
        Schema::dropIfExists('generalbloods');
    }
}
