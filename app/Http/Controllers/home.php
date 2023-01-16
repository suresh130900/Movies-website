<?php

namespace App\Http\Controllers;

use App\Models\movies;
use Illuminate\Http\Request;

class home extends Controller
{
    //
    public function index ()
    {
        $movie = movies::limit(7)->get();
        $most_watched = movies::limit(5)->get();
        $longest = movies::where('duration','>',200)->get();
        $tamil = movies::where('language','=','tamil')->get();
        $japan = movies::where('language','=','japanes')->get();
        $last = movies::where('movie_id','>','56')->get();

        return view("home",[
            "m"=>$movie,
            "l"=>$longest,
            't'=>$tamil,
            'j'=>$japan,
            'll'=>$last
        ]);

    }
}
