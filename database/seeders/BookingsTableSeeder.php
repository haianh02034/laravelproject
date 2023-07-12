<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\User;
use App\Models\Movie;
use App\Models\Auditorium;
use App\Models\Theater;
use App\Models\Showtime;
use Carbon\Carbon;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tạo các booking
        $booking1 = Booking::create([
            'user_id' => User::first()->id,
            'movie_id' => Movie::first()->id,
            'auditorium_id' => Auditorium::first()->id,
            'theater_id' => Theater::first()->id,
            'showtime_id' => Showtime::first()->id,
            'booking_date' => Carbon::now(),
        ]);

        $booking2 = Booking::create([
            'user_id' => User::first()->id,
            'movie_id' => Movie::find(2)->id,
            'auditorium_id' => Auditorium::find(2)->id,
            'theater_id' => Theater::find(2)->id,
            'showtime_id' => Showtime::find(2)->id,
            'booking_date' => Carbon::now(),
        ]);

        // Thêm các booking khác tại đây...

        // Hiển thị thông báo thành công
        $this->command->info('Bookings seeded successfully!');
    }
}
