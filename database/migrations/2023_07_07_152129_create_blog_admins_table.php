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
        Schema::create('blog_admins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('title');
            $table->string('imageBlog');
            $table->Text('description');
            $table->longText('content');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_admins');
    }
};
