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
            $table->string('carImage2')->nullable();
            $table->string('carImage3')->nullable();
            $table->string('carImage4')->nullable();
            $table->string('carName')->nullable();
            $table->string('carBrand')->nullable();
            $table->string('carID')->unique();
            $table->string('carModel')->nullable();
            $table->bigInteger('carPrice')->nullable(); // Thay đổi kiểu dữ liệu thành bigInteger()
            $table->integer('carYear')->nullable();
            $table->text('carDescription')->nullable();

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
