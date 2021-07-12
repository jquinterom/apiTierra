<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_land', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('land_id')->nullable(false);
            $table->unsignedBigInteger('employee_id')->nullable(false);


            // Foreings key
            $table->foreign('land_id')->references('id')->on('lands');
            $table->foreign('employee_id')->references('id')->on('employees');

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
        Schema::dropIfExists('employee_lands');
    }
}
