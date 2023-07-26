<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditorium extends Model
{
    protected $table = 'auditoriums';

    protected $fillable = [
        'theater_id',
        'name',
        'capacity',
    ];

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }
    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
