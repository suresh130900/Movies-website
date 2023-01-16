<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie_direction extends Model
{
    use HasFactory;

    public $fillable = [
        //dir_id	movie_id
        'dir_id',
        'movie_id',
        'created_at',
        'updated_at'
    ];
}
