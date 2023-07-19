<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class SeatSelectionController extends Controller
{
    //
    public function index(Request $request)
    {
        // Lấy các thông tin từ request (nếu cần)
        $movieId = $request->input('movie_id');
        $selectedTime = $request->input('selected_time');
        $movieTitle = $request->input('movie_title');

        // Các xử lý khác (nếu có)...

        // Trả về view seat_sel.blade.php và truyền các dữ liệu cần thiết
        return view('seat_sel', compact('movieId', 'selectedTime', 'movieTitle'));
    }
    // Trong SeatSelectionController

// public function showSeatSelection($movie_id, $selected_time, $movie_title) {
//     // Kiểm tra xem $selected_time có giá trị không
//     if (isset($selected_time)) {
//         // Biến $selected_time đã được khai báo và có giá trị
//         return view('seat_selection')->with([
//             'movie_id' => $movie_id,
//             'selected_time' => $selected_time,
//             'movie_title' => $movie_title,
//         ]);
//     } else {
//         // Nếu $selected_time không có giá trị, xử lý lỗi hoặc thông báo sai dữ liệu tùy theo logic của bạn
//         // Ví dụ:
//         return redirect()->back()->with('error', 'Selected time is missing.');
//     }
// }
public function showMovieDetails($movieId) {
    // Retrieve movie details and selected time
    $movie = Movie::find($movieId);
    $selectedTime = 'Today, 1:05 PM'; // Replace this with the actual selected time

    return view('movie_details', compact('movie', 'selectedTime'));
}

}
