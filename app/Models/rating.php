<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;

    public $fillable = [
        //movie_id	rev_id	rating
        'movie_id',
        'rev_id',
        'rating'
    ];
}
