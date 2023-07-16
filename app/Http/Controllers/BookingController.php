<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class BookingController extends Controller
{
    //
    public function showTicketBookingPage(Request $request)
    {
        // Lấy tên phim từ request và lưu vào Session
        $movieTitle = $request->input('movie_title');
        $request->session()->put('movie_title', $movieTitle);

        return view('ticket-booking', compact('movieTitle'));
    }
}
