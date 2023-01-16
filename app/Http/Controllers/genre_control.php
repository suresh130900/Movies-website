<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genres;
class genre_control extends Controller
{
    //
    public function index()
    {
        return view("genre_view");
    }

    public function insert_genre(Request $request)
    {
        $genre_title = $request->input("genre_name");

        genres::create([
            'genre_title'=>$genre_title
        ]);

        echo "DONE";
    }
}
