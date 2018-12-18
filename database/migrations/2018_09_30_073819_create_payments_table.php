<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('payment_date');
            $table->integer('amount');
            $table->integer('discount');
            $table->integer('patient_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->integer('appointment_id')->unsigned();
            $table->integer('vaccine_lists_id')->unsigned();
            $table->integer('delivery_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('patient_id')
                    ->references('id')->on('patients')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

            $table->foreign('service_id')
                    ->references('id')->on('services')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');


            $table->foreign('appointment_id')
                    ->references('id')->on('appointments')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
            
            $table->foreign('vaccine_lists_id')
                    ->references('id')->on('vaccine_lists')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

            $table->foreign('delivery_id')
                    ->references('id')->on('deliveries')
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
        Schema::dropIfExists('payments');
    }
}
