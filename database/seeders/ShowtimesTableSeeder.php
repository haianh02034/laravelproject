<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Showtime;
use App\Models\Movie;
use App\Models\Auditorium;
use Carbon\Carbon;
class ShowtimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tạo các showtime
        $showtime1 = Showtime::create([
            'movie_id' => Movie::first()->id,
            'auditorium_id' => Auditorium::first()->id,
            'start_time' => Carbon::parse('2022-01-01 10:00:00'),
        ]);

        $showtime2 = Showtime::create([
            'movie_id' => Movie::find(2)->id,
            'auditorium_id' => Auditorium::find(2)->id,
            'start_time' => Carbon::parse('2022-01-01 13:00:00'),
        ]);

        // Thêm các showtime khác tại đây...

        // Hiển thị thông báo thành công
        $this->command->info('Showtimes seeded successfully!');
    }
}
