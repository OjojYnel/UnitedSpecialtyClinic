<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('appointment_date');
            $table->integer('patient_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->timestamps();
            
                $table->foreign('patient_id')
                    ->references('id')->on('patients')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
                    
                $table->foreign('service_id')
                    ->references('id')->on('services')
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
        Schema::dropIfExists('appointments');
    }
}
