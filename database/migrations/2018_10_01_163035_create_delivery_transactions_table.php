<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vaccine_lists_id')->unsigned();
            $table->integer('delivery_id')->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('delivery_transactions');
    }
}
