<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCarReparationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('car_reparation_details', function (Blueprint $table) {
            //
            $table->integer('reparation_id')->after('id');
            $table->string('item')->after('reparation_id');
            $table->double('cost')->after('item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car_reparation_details', function (Blueprint $table) {
            //
        });
    }
}
