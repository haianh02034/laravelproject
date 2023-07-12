<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AuditoriumSeeder;
use App\Models\Auditorium;
use App\Models\Theater;
class AuditoriumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tạo các auditorium
        Auditorium::create([
    'theater_id' => 1,
    'name' => 'Auditorium 1',
    'capacity' => 100,
]);


        Auditorium::create([
            'theater_id' =>2,
            'name' => 'Auditorium 2',
            'capacity' => 150,
        ]);

        // Thêm các auditorium khác tại đây...

        // Hiển thị thông báo thành công
        // $this->command->info('Auditoriums seeded successfully!');
    }
}
