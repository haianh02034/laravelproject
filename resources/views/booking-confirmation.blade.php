<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <!-- Thêm các tài nguyên CSS, JavaScript, font chữ, hình ảnh, ... tùy theo thiết kế của bạn -->
</head>
<body>
    <div style="text-align: center;">
        <h1>Booking Confirmation</h1>
        <p>Thank you for booking your tickets. Here are your booking details:</p>
        <p>Movie: {{ $movieTitle }}</p>
        <p>Show Time: {{ $showTime }}</p>
        <p>Number of Tickets: {{ $numTickets }}</p>
        <p>Total Amount: ${{ $totalAmount }}</p>



            <h2>Booked Seats:</h2>
            <ul>
                @foreach($bookedSeats as $seat)
                    <li>Row {{ $seat->row }}, Column {{ $seat->column }}</li>
                @endforeach
            </ul>
        <!-- Thêm thông tin khác của khách hàng nếu cần -->
    </div>
</body>
</html>
