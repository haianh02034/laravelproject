<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
class BookingController extends Controller
{
    //
 
    public function index(Request $request)
    {
        $movieId = $request->input('movie_id');
        $showtimeId = $request->input('showtime_id');
    
        $movie = DB::table('movies')->find($movieId);
        $showtime = DB::table('showtimes')->find($showtimeId);
    
        return view('ticket-booking', compact('movie', 'showtime'));
    }
    

 
      
    
    
    
}
