<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturnTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vaccine_lists_id')->unsigned();
            $table->integer('return_id')->unsigned();
            $table->timestamps();

            $table->foreign('vaccine_lists_id')
            ->references('id')->on('vaccine_lists')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('return_id')
            ->references('id')->on('returns')
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
        Schema::dropIfExists('return_transactions');
    }
}
