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
        Schema::create('ratings', function (Blueprint $table) {
            //$table->integer("mov_id");
            $table->unsignedBigInteger("movie_id");
            
            //$table->timestamps();
            $table->foreign("movie_id")->references("movie_id")->on("movies")->onDelete('cascade');
            //$table->integer("rev_id");
            $table->unsignedBigInteger("rev_id");
            
            //$table->timestamps();
            $table->foreign("rev_id")->references("rev_id")->on("reviewers")->onDelete('cascade');
            $table->integer("rating");
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
        Schema::dropIfExists('ratings');
    }
};
