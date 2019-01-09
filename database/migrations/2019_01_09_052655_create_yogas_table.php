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
          $table->string('referredBy');
          $table->string('age');
          $table->text('investigationAdvised');
          $table->string('yogadate');
          $table->string('disease');
          $table->string('exersise');
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
        Schema::dropIfExists('yogas');
    }
}
