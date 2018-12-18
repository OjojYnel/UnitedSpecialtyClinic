<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccineListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccine_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->String('vaccine_name');
            $table->String('vaccine_serial');
            $table->date('expiration_date');
            $table->integer('quantity');
            $table->integer('vaccine_types_id')->unsigned();
            $table->timestamps();

            $table->foreign('vaccine_types_id')
            ->references('id')->on('vaccine_types')
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
        Schema::dropIfExists('vaccine_lists');
    }
}
