<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//database của trang booking//
class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'movie_id', 'auditorium_id', 'theater_id', 'showtime_id', 'booking_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function auditorium()
    {
        return $this->belongsTo(Auditorium::class);
    }

    public function theater()
    {
        return $this->belongsTo(Theater::class);
    }

    public function showtime()
    {
        return $this->belongsTo(Showtime::class);
    }
}
