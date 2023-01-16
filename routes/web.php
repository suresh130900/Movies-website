<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Controllers\movie_control;
use App\Http\Controllers\movie_control as ControllersMovie_control;
use App\Http\Controllers\actor_control as Controllersactor_control;
use App\Http\Controllers\director_control as Controllersdirector_control;
use App\Http\Controllers\reviewer_control as Controllersreviewer_control;
use App\Http\Controllers\genre_control as Controllersgenre_control;
use App\Http\Controllers\home as Controllershome;
use App\Http\Controllers\movie_cast_control as Controllersmovie_cast_control;
use App\Http\Controllers\movie_direction_control as Controllersmovie_direction_control;
use App\Http\Controllers\movie_genre_control as Controllersmovie_genre_control;
use App\Http\Controllers\movie_rating_control as Controllersmovie_rating_control;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/input', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get("/",[Controllershome::class,"index"]);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


//movie route
//creating a method get so that this will be displayed on the website
Route::get("/movie",[ControllersMovie_control::class,"index"] );
//creating a post method so that it will retriev the coloums and it is backend logic so this is not visible to the user
Route::post("/movie/new",[ControllersMovie_control::class,"insert_movie"] );

//actor route
Route::get("/actor",[Controllersactor_control::class,"index"] );
Route::post("/actor/new",[Controllersactor_control::class,"insert_actor"] );

//director route
Route::get("/director",[Controllersdirector_control::class,"index"] );
Route::post("/director/new",[Controllersdirector_control::class,"insert_director"] );

//reviewer route
Route::get("/reviewer",[Controllersreviewer_control::class,"index"] );
Route::post("/reviewer/new",[Controllersreviewer_control::class,"insert_reviewer"] );

//genre control
Route::get("/genre",[Controllersgenre_control::class,"index"] );
Route::post("/genre/new",[Controllersgenre_control::class,"insert_genre"] );

//movie caste route
Route::get("/cast",[Controllersmovie_cast_control::class,"index"] );
Route::post("/cast/new",[Controllersmovie_cast_control::class,"insert_cast"] );

// movie direction route
Route::get("/direction",[Controllersmovie_direction_control::class,"index"] );
Route::post("/direction/new",[Controllersmovie_direction_control::class,"insert_direction"] );

//movie genre route
Route::get("/movie/genre",[Controllersmovie_genre_control::class,"index"] );
Route::post("/movie/genre/new",[Controllersmovie_genre_control::class,"insert_genre"] );

//rating route
Route::get("/rating",[Controllersmovie_rating_control::class,"index"] );
Route::post("/rating/new",[Controllersmovie_rating_control::class,"insert_rating"] );

//edit page
Route::get("/edit/movie/{id}",[Controllersmovie_control::class,"editIndex"] );
Route::post("/edit/movie/{id}/new",[Controllersmovie_control::class,"editMovie"] );

//this is route for movie list

Route::get("/movie_list",[Controllersmovie_control::class,"movie_list"] );

