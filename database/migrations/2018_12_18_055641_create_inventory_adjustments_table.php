<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryAdjustmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_adjustments', function (Blueprint $table) {
            $table->increments('id');
            $table->date('adjustment_date');
            $table->enum('adjustment_reason',['New Stock','Replaced','Damaged', 'Decreased']);
            $table->integer('increase_amount');
            $table->integer('decrease_amount');
            $table->integer('vaccine_types_id')->unsigned();
            $table->integer('patients_id')->unsigned();
            $table->timestamps();

         $table->foreign('vaccine_types_id')
            ->references('id')->on('vaccine_types')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('patients_id')
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
        Schema::dropIfExists('inventory_adjustments');
    }
}
