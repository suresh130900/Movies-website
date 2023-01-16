<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie_genres extends Model
{
    use HasFactory;

    public $fillable = [
        //movie_id	genre_id
        'movie_id',
        'genre_id'
    ];
}
