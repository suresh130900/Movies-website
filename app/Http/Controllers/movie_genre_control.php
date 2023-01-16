<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movies;
use App\Models\genres;
use App\Models\movie_genres;
class movie_genre_control extends Controller
{
    //
    public function index()
    {
        //creating a variable for inserting data from movie table and genre table
        $movie = movies::all();
        $genre = genres::all();
        return view("movie_genre_view",[
            //creating a key value pair
            'm'=>$movie,
            'g'=>$genre
        ]);
    }

    public function insert_genre(Request $request)
    {
        $movie_name = $request->input("movie_id");
        $genre_name = $request->input("genre_id");

        movie_genres::create([
            //movie_id	genre_id	
            'movie_id'=>$movie_name,
            'genre_id'=>$genre_name
        ]);

        echo "DONE";
    }
}
