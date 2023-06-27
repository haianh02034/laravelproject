<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'director',
        'performer',
        'producer',
        'release_year',
        'National_production',
        'time',
        'movie_photo',
        'language',
    ];
}
