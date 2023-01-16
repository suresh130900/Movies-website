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
        Schema::create('movie_directions', function (Blueprint $table) {
            //$table->integer("dir_id");

            //this is creating a foreign key
            $table->unsignedBigInteger("dir_id");
            //the first dir_id is the above one and the references dir_id is from directors tabel
            $table->foreign("dir_id")->references("dir_id")->on("directors")->onDelete('cascade');
            //$table->integer("movie_id");
            $table->unsignedBigInteger("movie_id");
            $table->foreign("movie_id")->references("movie_id")->on("movies")->onDelete('cascade');
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
        Schema::dropIfExists('movie_directions');
    }
};
