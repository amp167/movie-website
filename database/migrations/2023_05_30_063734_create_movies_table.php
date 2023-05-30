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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_id');
            $table->foreignId('category_id');
            $table->string("name");
            $table->string("slug");
            $table->text("intro");
            $table->text("body");
            $table->string("downloadLink1");
            $table->string("downloadLink2");
            $table->string("downloadLink3");

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
        Schema::dropIfExists('movies');
    }
};
