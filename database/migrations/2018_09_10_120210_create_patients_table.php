<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('patient_lname');
            $table->text('patient_fname');
            $table->date('patient_bday');
            $table->string('patient_address');
            $table->char('patient_gender');
            $table->text('father_name');
            $table->text('mother_name');
            $table->text('mother_occupation');
            $table->text('father_occupation');
            $table->integer('contact_number');
            $table->text('type_of_delivery');
            $table->integer('age');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
