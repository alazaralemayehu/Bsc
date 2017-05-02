<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');

            $table->integer('measurement_unit_id')->unsigned();
            $table->foreign('measurement_unit_id')->references('id')->on('measurement_units')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('standard_id')->unsigned();
            $table->foreign('standard_id')->references('id')->on('standards')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activities');
    }
}
