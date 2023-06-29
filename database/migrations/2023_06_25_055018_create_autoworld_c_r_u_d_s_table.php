<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up()
    {
        Schema::create('autoworld_CRUDs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('carImage')->nullable();
            $table->string('carName');
            $table->string('carBrand');
            $table->string('carID');
            $table->string('carModel');
            $table->string('carPrice');
            $table->string('carYear');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autoworld_CRUDs');
    }
};
