<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Theater extends Model
{
    protected $fillable = [
        'name',
        'address',
    ];


    // Các quan hệ với các model khác

    // public function auditoriums()
    // {
    //     return $this->hasMany(Auditorium::class);
    // }
}
