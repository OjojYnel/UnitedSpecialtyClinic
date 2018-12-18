<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoneschedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donesched', function (Blueprint $table) {
            $table->text('patient_lname');
            $table->text('patient_mname');
            $table->text('patient_fname');
            $table->date('patient_bday');
            $table->char('patient_gender');
            $table->increments('id');
            $table->timestamps();

            $table->foreign('id')
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
        Schema::dropIfExists('donesched');
    }
}
