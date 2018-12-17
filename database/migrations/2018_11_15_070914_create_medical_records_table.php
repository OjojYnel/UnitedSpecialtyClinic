<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->float('height');
            $table->float('weight');
            $table->float('respiration');   //breathes (30 to 60 breathes per minutes for infant)
            $table->integer('pulse_rate');  //100 to 160 beats per minute bpm for infant
            $table->float('temperature');   //degrees celsius
            $table->integer('patient_id')->unsigned();
            $table->integer('diagnoses_id')->unsigned()->nullable();
            $table->integer('immunization_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('patient_id')
                ->references('id')->on('patients')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('immunization_id')
                ->references('id')->on('immunizations')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('diagnoses_id')
                ->references('id')->on('diagnoses')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_records');
    }
}
