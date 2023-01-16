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

        //this is automatically created
        Schema::create('movies', function (Blueprint $table) {
            //creating a primary key with ID()
            $table->id("movie_id");
            //$table->foreign('id')->references('mov_id')->on('movie_genres')->onDelete('cascade');

            //creating other coloumn in the table
            //$table->string("poster");
            $table->string("movie_name");
            
            $table->date("release_date");
            
            $table->integer("Duration");
            $table->string("language");
            $table->string("description");
            // $table->integer("genre_id");
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
