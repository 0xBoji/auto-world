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
        Schema::create('contactCRUD', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // Thêm dòng này để tạo cột created_at và updated_at
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('subject')->nullable();
            $table->string('message')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactCRUD');
    }
};
