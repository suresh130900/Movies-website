<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviewer extends Model
{
    use HasFactory;

    public $fillable=[
        'rev_name'
    ];
}
