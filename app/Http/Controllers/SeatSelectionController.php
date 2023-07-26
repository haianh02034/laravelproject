<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Seat;
class SeatSelectionController extends Controller
{
    // public function showSeatSelection(Request $request)
    // {
    //     // Lấy thông tin phim từ URL (đảm bảo rằng bạn đã truyền movie_id qua URL)
    //     $movie_id = $request->input('movie_id');
    //     $movie = Movie::find($movie_id);
    
    //     // Truyền thông tin phim đến trang seat-selection
    //     return view('seat-selection', ['movie' => $movie]);
    // }
    
    public function handleSeatSelection(Request $request)
    {
        // Retrieve the selected values from the form
        $selectedDate = $request->input('selectedDate');
        $selectedTime = $request->input('selectedTime');
        $selectedScreen = $request->input('selectedScreen');
    
        // ... (Kiểm tra và xử lý lỗi tương tự như trong câu trả lời trước)
      
    
        // Truyền các biến vào view khi redirect hoặc render view
        return view('seat-selection', compact('selectedDate', 'selectedTime', 'selectedScreen'));
    }
    // public function showSeatSelection()
    // {
    //     // Lấy thông tin phòng chiếu và các ghế đã đặt từ database
    //     // $auditorium = ...; // Lấy thông tin phòng chiếu từ database (nếu cần)
    //     $bookedSeats = Seat::where('is_booked', 1)->get(); // Lấy danh sách các ghế đã đặt từ database

    //     return view('seat-selection', compact('auditorium', 'bookedSeats'));
    // }

    public function SeatSelection(Request $request)
    {
        // Lấy thông tin ghế được chọn từ request và lưu vào database
        $selectedSeats = $request->input('selectedSeats');

        foreach ($selectedSeats as $seat) {
            $row = $seat['row'];
            $column = $seat['column'];

            // Kiểm tra xem ghế có sẵn trong database hay không (nếu cần)
            $existingSeat = Seat::where('row', $row)->where('column', $column)->first();

            if (!$existingSeat) {
                // Nếu ghế không tồn tại, tạo mới và lưu vào database
                $newSeat = new Seat();
                $newSeat->row = $row;
                $newSeat->column = $column;
                $newSeat->is_booked = 1;
                $newSeat->save();
            } else {
                // Nếu ghế đã tồn tại, cập nhật trạng thái đặt ghế
                $existingSeat->is_booked = 1;
                $existingSeat->save();
            }
        }

        // Chuyển hướng người dùng đến trang xác nhận đặt ghế hoặc trang thành công
        return redirect()->route('bookingConfirmation');
    }

    public function showBookingConfirmation()
    {
        // Lấy thông tin xác nhận đặt ghế từ database hoặc từ các biến khác (tùy theo trường hợp của bạn)

        // Ví dụ: thông tin về phim, giờ chiếu, số lượng vé đã đặt, tổng tiền, thông tin khách hàng,...
        $movieTitle = "Avengers: Endgame";
        $showTime = "2023-07-01 15:00";
        $numTickets = 4;
        $totalAmount = 160;
        $bookedSeats = Seat::where('is_booked', true)->get();

        return view('booking-confirmation', compact('movieTitle', 'showTime', 'numTickets', 'totalAmount'));
        return view('booking-confirmation', ['bookedSeats' => $bookedSeats]);
    }
  

}
