<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastVidangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_vidanges', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id');
            $table->double('last_visite');
            $table->double('next_visite');
            $table->double('current');
            $table->integer('countdown');
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
        Schema::dropIfExists('last_vidanges');
    }
}
