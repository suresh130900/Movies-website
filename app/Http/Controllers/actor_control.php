<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actor;
use App\Http\Controllers\actors;


class actor_control extends Controller
{
    //
    public function index()
    {
        return view("actor_view");
    }

    public function insert_actor(Request $request)
    {
        $actor_id = $request->actor_id;
        $first_name = $request->input('first_name');
        echo $first_name;
        $last_name = $request->input('last_name');
        echo $last_name;
        $gender = $request->input('gender');
        echo $gender;

        //actor_id	actor_fname	actor_lname	gender	created_at	updated_at	
        //model name then create
        actor::create([
            'actor_fname'=>$first_name , 'actor_lname'=>$last_name , 'gender'=>$gender
        ]);

        echo "Done";
    }
}
