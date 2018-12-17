<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->float('official_receipt');
            $table->integer('quantity_ordered');
            $table->integer('quantity_received');
            $table->integer('quantity_missing');
            $table->integer('quantity_damaged');
            $table->double('purchase_price');
            $table->String('supplier_name');
            $table->integer('vaccine_list_id')->unsigned();
            $table->timestamps();

            $table->foreign('vaccine_list_id')
            ->references('id')->on('vaccine_lists')
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
        Schema::dropIfExists('purchases');
    }
}
