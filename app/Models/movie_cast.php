<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie_cast extends Model
{
    use HasFactory;

    public $fillable=[
        //actor_id	movie_id	role
        //updated_at
        //created_at
        'actor_id' , 'movie_id' , 'role','updated_at','created_at'
    ];
}
