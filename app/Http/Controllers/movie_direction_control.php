<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movies;
use App\Models\director;
use App\Models\movie_direction;
use Carbon\Carbon;

class movie_direction_control extends Controller
{
    //
    public function index()
    {
        $movie = movies::all();
        $director = director::all();

        return view("movie_direction_view",[
            'm'=>$movie,
            'd'=>$director,
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
    }

    public function insert_direction(Request $request)
    {
        $movie_name = $request->input("movie_id");
        $director_name = $request->input("director_id");

        movie_direction::insert([
            //dir_id	movie_id
            'movie_id'=>$movie_name,
            'dir_id'=>$director_name
        ]);

        echo "DONE";
    }

    
}
