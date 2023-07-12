<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $fillable = [
        'movie_id',
        'auditorium_id',
        'start_time',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function auditorium()
    {
        return $this->belongsTo(Auditorium::class);
    }
}