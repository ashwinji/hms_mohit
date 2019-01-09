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
          $table->string('referredBy');
          $table->string('age');
          $table->text('investigationAdvised');
          $table->string('date');
          $table->string('bloodFasting');
          $table->string('bloodRandom');
          $table->string('bloodPP');
          $table->string('urea');
          $table->string('creatinine');
          $table->string('uricAcid');
          $table->string('totalBilirubin');
          $table->string('directBilirubin');
          $table->string('sgptAlt');
          $table->string('sgotAst');
          $table->string('alkPhosphatase');
          $table->string('totalProtein');
          $table->string('albumin');
          $table->string('agRatio');
          $table->string('created_at');
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
