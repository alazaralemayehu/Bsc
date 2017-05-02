<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitiativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategic_initiatives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');

            $table->integer('objective_id')->unsigned();
            $table->foreign('objective_id')->references('id')->on('strategic_objectives')
                ->onUpdate('cascade')->onDelete('cascade');

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
        Schema::drop('strategic_initiatives');
    }
}
