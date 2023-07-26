<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Xoá dữ liệu cũ (nếu có) để tránh trùng lặp khi chạy Seeder nhiều lần
        DB::table('seats')->truncate();

        // Thêm dữ liệu mẫu
        $rows = 10;
        $columns = 10;

        for ($row = 1; $row <= $rows; $row++) {
            for ($column = 1; $column <= $columns; $column++) {
                DB::table('seats')->insert([
                    'row' => $row,
                    'column' => $column,
                    'is_booked' => false,
                    // 'auditorium_id' => 1,
                ]);
            }
        }
    }
}
