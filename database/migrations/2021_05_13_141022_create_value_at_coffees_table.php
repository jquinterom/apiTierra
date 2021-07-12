<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValueAtCoffeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('value_at_coffees', function (Blueprint $table) {
            $table->id();
            $table->float('at_price', 10)->nullable(false);
            $table->float('kilogram_price', 10)->nullable(false);
            $table->unsignedBigInteger('land_id')->nullable(false);

            // Foreing Key
            $table->foreign('land_id')->references('id')->on('lands');
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
        Schema::dropIfExists('value_at_coffees');
    }
}
