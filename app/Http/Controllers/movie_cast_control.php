<?php

namespace App\Http\Controllers;

use App\Models\actor;
use App\Models\movies;
use App\Models\movie_cast;
use Illuminate\Http\Request;

class movie_cast_control extends Controller
{
    //
    public function index()
    {
        //we are feching all the coloumn values

        $actors = actor::all();
        $movie = movies::all();

        //we are passing the values as parameter to the HTMl pages
        //passing an array
        return view("movie_cast_view",[
            'a'=>$actors,
            'movies'=>$movie
        ]);
    }

    public function insert_cast(Request $request)
    {
        $cast_movie_id = $request->input("movie_id");
        $cast_actor_id = $request->input("actor_id");
        $cast_role = $request->input("role");

        movie_cast::insert([
            //actor_id	movie_id	role
            'movie_id'=>$cast_movie_id,
            'actor_id'=>$cast_actor_id,
            'role'=>$cast_role
        ]);
        

        echo "DONE";
    }
}
