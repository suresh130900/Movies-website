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
        Schema::create('movie_casts', function (Blueprint $table) {
            //$table->id();
            //$table->integer("actor_id");
            $table->unsignedBigInteger("actor_id");
            $table->foreign("actor_id")->references("actor_id")->on("actors")->onDelete('cascade');
            //$table->integer("movie_id");
            $table->unsignedBigInteger("movie_id");
            $table->foreign("movie_id")->references("movie_id")->on("movies")->onDelete('cascade');
            $table->string("role");
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
        Schema::dropIfExists('movie_casts');
    }
};
