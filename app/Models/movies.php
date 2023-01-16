<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;


    //allowing what to inset (columns)
    public $fillable = [
        'movie_name','release_date','Duration','language','description'
    ];
}
