<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYogasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yogas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('patientId');
          $table->string('referredBy')->nullable();
          $table->string('age')->nullable();
          $table->text('investigationAdvised')->nullable();
          $table->string('yogadate')->nullable();
          $table->string('disease')->nullable();
          $table->string('exersise')->nullable();
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
        Schema::dropIfExists('yogas');
    }
}
