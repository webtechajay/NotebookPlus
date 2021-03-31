<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('industry_id')->nullable();
            $table->integer('movie_type_id')->nullable();
            $table->string('movie_title')->nullable();
            $table->string('movie_name')->nullable();
            $table->string('movie_photo')->nullable();
            $table->string('movie_desc')->nullable();
            $table->string('movie_screen_short')->nullable();
            $table->string('movie_dawnload_photo')->nullable();
            $table->string('movie_source')->nullable();
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
}
