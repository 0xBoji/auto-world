<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compare_cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image');
            $table->string('body_style');
            $table->string('engine_type');
            $table->string('fuel');
            $table->string('year_of_manufacture');
            $table->string('transmission');
            $table->string('seating_capacity');
            $table->string('number_of_doors');
            $table->string('price');
            $table->string('origin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compare_cars');
    }
};
