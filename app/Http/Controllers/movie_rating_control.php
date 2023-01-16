<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rating;
use App\Models\reviewer;
use App\Models\movies;


class movie_rating_control extends Controller
{
    //
    public function index()
    {
        $movie_id = movies::all();
        $reviewer_id = reviewer::all();

        return view("movie_rating",[
            'm'=>$movie_id,
            'r'=>$reviewer_id
        ]);
    }

    public function insert_rating(Request $request)
    {
        $movie_name = $request->input("movie_id");
        $reviewer_name = $request->input("reviewer_id");
        $rating = $request->input("rating");

        rating::insert([
            //movie_id	rev_id	rating
            'movie_id'=>$movie_name,
            'rev_id'=>$reviewer_name,
            'rating'=>$rating
        ]);

        echo "DONE";
    }
}
