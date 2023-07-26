<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = ['row', 'column', 'is_booked'];

    // Mô tả mối quan hệ giữa Seat và Auditorium
    public function auditorium()
    {
        return $this->belongsTo(Auditorium::class);
    }
}
