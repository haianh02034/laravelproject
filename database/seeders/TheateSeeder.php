<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Theater;


class TheateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tạo các theater
        Theater::create([
            'name' => 'Rạp chiếu phim A',
            'address' => 'Địa chỉ A',
        ]);

        Theater::create([
            'name' => 'Rạp chiếu phim B',
            'address' => 'Địa chỉ B',
        ]);

        // Thêm các theater khác tại đây...

        // Hiển thị thông báo thành công
        // $this->command->info('Theaters seeded successfully!');
    }
}
