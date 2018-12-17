<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceUseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_use', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('service_use_date');
            $table->integer('service_id')->unsigned();
            $table->integer('appointment_id')->unsigned()->nullable();
            $table->integer('patient_id')->unsigned();
            $table->timestamps();

            $table->foreign('service_id')
            ->references('id')->on('services')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('appointment_id')
            ->references('id')->on('appointments')
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
        Schema::dropIfExists('service_uses');
    }
}
