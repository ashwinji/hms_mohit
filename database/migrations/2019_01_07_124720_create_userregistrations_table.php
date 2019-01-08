<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userregistrations', function (Blueprint $table) {
            $table->increments('userId');
            $table->string('userType');
            $table->string('useremail');
            $table->string('password');
            $table->string('name');
            $table->string('mobile');
            $table->string('website');
            $table->string('userImage');
            $table->string('status');
        
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
        Schema::dropIfExists('userregistrations');
    }
}
