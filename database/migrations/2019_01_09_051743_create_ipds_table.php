<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patientId');
            $table->string('opdDate');
            $table->string('ipdRegNum');
            $table->string('ipdRegDate');
            $table->string('consultant');
            $table->string('otherConsultant');
            $table->string('prefixName');
            $table->string('refName');
            $table->string('wardName');
            $table->string('bedNum');
            $table->string('dod');
            $table->string('provisionalDiagnosis');
            $table->string('chiefComplaints');
            $table->string('pastHistory');
            $table->string('fh_maternal');
            $table->string('fh_paternal');
            $table->string('fh_other');
            $table->string('ge_gc');
            $table->string('ge_anaemla');
            $table->string('ge_bowel');
            $table->string('ge_pulse');
            $table->string('ge_jvp');
            $table->string('ge_sleep');
            $table->string('ge_temp');
            $table->string('ge_oedema');
            $table->string('ge_allergies');
            $table->string('ge_resp');
            $table->string('ge_cyanosis');
            $table->string('ge_skin');
            $table->string('ge_bp');
            $table->string('ge_thirst');
            $table->string('ge_tongue');
            $table->string('ge_lymph');
            $table->string('ge_addictions');
            $table->string('ge_conjective');
            $table->string('ge_throat');
            $table->string('ge_diet');
            $table->string('ecgTest');
            $table->string('respiratorySystem');
            $table->string('gastroIntestinalSystem');
            $table->string('cardioVascularSystem');
            $table->string('centralNervousSystem');
            $table->string('localExamination');
            $table->string('investigation1');
            $table->string('investigation2');
            $table->string('investigation3');
            $table->string('medicine1');
            $table->string('potency1');
            $table->string('medicine2');
            $table->string('potency2');
            $table->string('medicine3');
            $table->string('potency3');
            $table->string('dietPlan1');
            $table->text('diet1Text');
            $table->string('dietPlan2');
            $table->text('diet2Text');
            $table->string('yoga');
            $table->string('physiotherapy');
            $table->text('remark');
            $table->enum('dltStatus',array('N','Y'));
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
        Schema::dropIfExists('ipds');
    }
}
