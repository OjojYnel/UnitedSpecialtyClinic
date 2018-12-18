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
            $table->String('type');
            $table->String('diagnosis');
            $table->String('immunization');
            $table->String('allergies'); //"NKA or No Known Allergies"
            $table->integer('patient_id')->unsigned();
            $table->timestamps();

            $table->foreign('patient_id')
            ->references('id')->on('patients')
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
