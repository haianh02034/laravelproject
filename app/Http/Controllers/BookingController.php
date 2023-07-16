<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Movie;

class BookingController extends Controller
{
    //
    public function index(Request $request)
    {
        // Get the selected movie ID from the query parameter
        $movieId = $request->input('movie_id');

        // Retrieve the movie details based on the movie ID from the database
        $movie = Movie::find($movieId);

        // Pass the movie title to the ticket-booking view
        return view('ticket-booking', ['movie' => $movie]);
    }
}
