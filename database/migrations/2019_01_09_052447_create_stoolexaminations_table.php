<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoolexaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoolexaminations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientId');
            $table->string('referredBy');
            $table->string('age');
            $table->string('investigationAdvised');
            $table->string('date');
            $table->string('colour');
            $table->string('consistency');
            $table->string('mucus');
            $table->string('blood');
            $table->string('pusCells');
            $table->string('rbcs');
            $table->string('vegetableMatter');
            $table->string('cysts');
            $table->string('giardia');
            $table->string('eHistolytica');
            $table->string('eCoil');
            $table->string('ova');
            $table->string('worms');
            $table->string('occultBlood');
            $table->string('reducingSubstances');
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
        Schema::dropIfExists('stoolexaminations');
    }
}
