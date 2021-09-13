<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuelRechargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_recharges', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id');
            $table->string('date');
            $table->double('quantity')->nullable();
            $table->double('cost');
            $table->double('kilometers');
            $table->string('zone');
            $table->integer('month');
            $table->integer('year');
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
        Schema::dropIfExists('fuel_recharges');
    }
}
