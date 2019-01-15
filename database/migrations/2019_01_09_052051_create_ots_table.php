<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientId')->nullable();
            $table->string('opdDate')->nullable();
            $table->string('ipdRegNum')->nullable();
            $table->string('ipdRegDate')->nullable();
            $table->string('otDate')->nullable();
            $table->text('dignosis')->nullable();
            $table->text('otProcessure');
            $table->string('consultant');
            $table->string('otherConsultant');
            $table->text('adviceTreatment');
            $table->text('medicine1');
            $table->text('medicine2');
            $table->text('medicine3');
            $table->text('remark');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ots');
    }
}
