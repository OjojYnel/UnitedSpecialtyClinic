<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccinesUsedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccines_used', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_administered')->nullable();
            $table->integer('vaccine_list_id')->unsigned()->nullable();
            $table->integer('immunization_id')->unsigned();
            $table->timestamps();

            $table->foreign('vaccine_list_id')
            ->references('id')->on('vaccine_lists')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('immunization_id')
            ->references('id')->on('immunizations')
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
        Schema::dropIfExists('vaccines_used');
    }
}
