<?php

namespace App\Http\Controllers;

use App\Models\movie_cast;
use App\Models\movies;
use App\Models\genres;
use Illuminate\Http\Request;

class movie_control extends Controller
{
    public function index()
    {
        return view("movie_view");
    }
    
    public function insert_movie(Request $request){
        //In This we are fecting the data from the HTML form (movie_view.blade.php) 
        //from the movie_name textbox we will be storing that data in $movie_name varaibale
        // $poster = $request->input('poster');
        // echo $poster;
        
        $movie_name = $request->input('movie_name');
        echo $movie_name;

        $release_date = $request->input('release_date');
        echo $release_date;

        $Duration = $request->input('Duration');
        echo $Duration;

        $language = $request->input('language');
        echo $language;

        $description = $request->input('description');
        echo $description;
       $m =  movies::create([
            'movie_name'=>$movie_name	,'release_date'=>$release_date	,'Duration'=>$Duration	,'language'=>$language	,
            'description'=>$description
        ]);

        $casts = $request->input("actors");
        foreach($casts as $c){
          movie_cast::create([
            'actor_id' =>$c, 'movie_id'=>$m->id , 'role'=>"abc",
          ]);
        };
     
        $genre = $request->input("genres");
        foreach($genre as $g){
          genres::create([
            'id' =>$g, 'title'=>$m->id , 'role'=>"abc",
          ]);
        };
       

        //movie_id	movie_name	release_date	Duration	language	description	created_at	updated_at	


        //call model 
        //the name in quotes is the coloumn name and we are assgining the values of the variable 
        




        echo "DONE";


        // $genre_id = $request->input('genre_id');
        // echo $genre_id;
    }

    public function editIndex(Request $request)
    {
      $id = $request->id;
      $movie = movies::where("movie_id",$id)->first(); 

        return view("movie_edit",["mm"=>$movie]);
    }

    public function editMovie(Request $request)
    {
      $id = $request->id;
      $casts = $request->input("actors");
      $genre = $request->input("genre");

      $movie_name = $request->input('movie_name');
      
        $release_date = $request->input('release_date');

        $Duration = $request->input('Duration');
       
        $language = $request->input('language');
   
        $description = $request->input('description');

        $actor = $request->input('actors');

        $genre = $request->input('genres');
        movies::where("movie_id",$id)->update([  'movie_name'=>$movie_name	,'release_date'=>$release_date	,'Duration'=>$Duration	,'language'=>$language	,
        'description'=>$description]);

        //actor::where("actor_id",$id)->update([ 'actor_fname']);
 
        $cast_count = movie_cast::where("movie_id",$id)->count();
     if($cast_count > 0)
     {
      movie_cast::where("movie_id",$id)->delete();
     }
     
      // foreach($casts as $c){
      //   movie_cast::create([
      //     'actor_id' =>$c, 'movie_id'=>$id , 'role'=>"abc",
      //   ]);
      // };

      foreach($genre as $g){
        genres::create([
          'movie_id'=>$id ,'genre_id' =>$g
        ]);
      };

      echo "DONE";
    }

    public function movie_list()
    {
      $movie = movies::all();
      return view("movie_list",[
        "m"=>$movie
      ]);
    }
}
