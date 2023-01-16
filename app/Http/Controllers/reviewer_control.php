<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reviewer;
class reviewer_control extends Controller
{
    //
    public function index()
    {
        return view("reviewer");
    }

    public function insert_reviewer(Request $request)
    {
        $reviewer_name = $request->input("reviewer_name");

        reviewer::create([
            'rev_name'=>$reviewer_name
        ]);

        echo "DONE";
    }

}
