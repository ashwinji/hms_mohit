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
            $table->string('userType')->nullable();
            $table->string('useremail')->nullable();
            $table->string('password')->nullable();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('website')->nullable();
            $table->string('userImage')->nullable();
            $table->string('status')->nullable();
        
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
