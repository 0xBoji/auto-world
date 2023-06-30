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
            $table->string('image')->nullable();
            $table->string('body_style')->nullable();
            $table->string('engine_type')->nullable();
            $table->string('fuel')->nullable();
            $table->string('year_of_manufacture')->nullable();
            $table->string('transmission')->nullable();
            $table->string('seating_capacity')->nullable();
            $table->string('number_of_doors')->nullable();
            $table->string('price')->nullable();
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
