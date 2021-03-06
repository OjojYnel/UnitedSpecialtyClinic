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
            $table->String('vaccine_lot_number');
            $table->date('vaccine_receive_date');
            $table->date('vaccine_expiration_date');
            $table->integer('quantity');
            $table->enum('status',['Available','Damaged','Expired','Returned','Replaced','Consumed']);
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
