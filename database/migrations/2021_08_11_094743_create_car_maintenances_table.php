<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_maintenances', function (Blueprint $table) {
           // Schema::dropIfExists(table('car_reparations'));
            //Schema::dropIfExists(table('car_reparation_details'));
            $table->id();
            $table->integer('car_id');
            $table->integer('type_id');
            $table->string('date');
            $table->integer('items_changed');
            $table->double('total_cost');
            $table->double('maintenance_cost');
            $table->string('locality');
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
        Schema::dropIfExists('car_maintenances');
    }
}
