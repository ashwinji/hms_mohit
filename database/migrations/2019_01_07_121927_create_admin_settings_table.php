<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('website_title');
            $table->string('lock_time');
            $table->string('logo_image');
            $table->string('fbLink');
            $table->string('twLink');
            $table->string('goLink');
            $table->string('lnLink');
            $table->string('contact');
            $table->string('email');
            $table->string('address');
            $table->string('openingHrs');
          
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
        Schema::dropIfExists('admin_settings');
    }
}
