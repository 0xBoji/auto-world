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
            $table->string('brands')->nullable();
            $table->string('carName')->nullable();
            $table->string('image')->nullable();
            $table->string('body_style')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('fuel')->nullable();
            $table->string('color')->nullable();
            $table->integer('year_of_manufacture')->nullable();
            $table->string('transmission')->nullable();
            $table->integer('seating_capacity')->nullable();
            $table->integer('number_of_doors')->nullable();
            $table->bigInteger('price')->nullable();
            $table->string('origin')->nullable();
            $table->longText('description')->nullable();
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
