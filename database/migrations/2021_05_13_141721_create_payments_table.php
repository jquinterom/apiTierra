<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->float('total_kilograms_paid', 10)->nullable(false);
            $table->float('value_kilogram', 10)->nullable(false);
            $table->float('subtotal', 10)->nullable(false);
            $table->float('value_lending', 10)->nullable(false);
            $table->float('total', 10)->nullable(false);
            $table->unsignedBigInteger('employee_land_id')->nullable(false);

            // Foreing key
            $table->foreign('employee_land_id')->references('id')->on('employee_land');
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
        Schema::dropIfExists('payments');
    }
}
