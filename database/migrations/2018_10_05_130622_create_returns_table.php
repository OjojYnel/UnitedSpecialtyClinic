<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returns', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('return_date');
            $table->text('reason');
            $table->dateTime('replacement_date')->nullable();
            $table->text('status');
            $table->integer('vaccine_lists_id')->unsigned();
            $table->timestamps();

            $table->foreign('vaccine_lists_id')
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
        Schema::dropIfExists('returns');
    }
}
