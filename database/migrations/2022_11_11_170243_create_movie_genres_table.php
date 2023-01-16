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
        Schema::create('movie_genres', function (Blueprint $table) {
            //$table->integer("mov_id");
            $table->unsignedBigInteger("movie_id");
            
            //$table->timestamps();
            $table->foreign("movie_id")->references("movie_id")->on("movies")->onDelete('cascade');
            $table->unsignedBigInteger("genre_id");
            
            $table->timestamps();
            $table->foreign("genre_id")->references("id")->on("genres")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_genres');
    }
};
