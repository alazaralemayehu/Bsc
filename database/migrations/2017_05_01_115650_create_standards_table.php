<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standards', function (Blueprint $table) {
            $table->increments('id');

            $table->float('planned_quantity');
            $table->float('achieved_quantity');

            $table->float('planned_quality');
            $table->float('achieved_quality');

            $table->float('planned_prices');
            $table->float('achieved_price');

            $table->timestamp('planned_time');
            $table->timestamp('achieved_time');

            $table->float('baseline');
            $table->float('target');
            $table->float('progress');
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
        Schema::drop('standards');
    }
}
