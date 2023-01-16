<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\director;
class director_control extends Controller
{
    //
    public function index()
    {
        return view("director_view");
    }

    public function insert_director(Request $request)
    {
        //	dir_id	dir_fname	dir_lname	created_at	updated_at
        $d_first_name = $request->input("first_name");
        $d_last_name = $request->input("last_name");

        director::create([
            'dir_fname'=>$d_first_name , 'dir_lname'=>$d_last_name
        ]);

        echo "DONE";
    }
}
