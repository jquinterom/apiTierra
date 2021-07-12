<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmountKilogramEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amount_kilogram_employees', function (Blueprint $table) {
            $table->id();
            $table->float('amount_kilogram', 10)->nullable(false);
            $table->unsignedBigInteger('employee_id')->nullable(false);

            // Foreing key
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
        Schema::dropIfExists('amount_kilogram_employees');
    }
}
