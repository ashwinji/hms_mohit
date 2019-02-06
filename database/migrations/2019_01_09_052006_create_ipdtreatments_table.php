<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpdtreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipdtreatments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientId');
            $table->string('ipdId');
            $table->string('refTo')->nullable();
            $table->text('complaint')->nullable();
            $table->text('treatment')->nullable();
            $table->string('medicine')->nullable();
            $table->string('potency')->nullable();
            $table->string('nod')->nullable();
            $table->text('advice')->nullable();
            $table->text('remark')->nullable();
            $table->string('consultant')->nullable();
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
        Schema::dropIfExists('ipdtreatments');
    }
}
