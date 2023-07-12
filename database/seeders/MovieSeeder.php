<?php

namespace Database\Seeders;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'category' => 'Two imprisoned men bond over several years, finding solace and eventual redemption through acts of common decency.',
                // 'movie_photo' => 'images/shawshank_redemption.jpg',
                'time' => '2h 22min',
            ],
            [
                'title' => 'Inception',
                'category' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                // 'movie_photo' => 'images/inception.jpg',
                'time' => '2h 28min',
            ],
            [
                'title' => 'The Dark Knight',
                'category' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                // 'movie_photo' => 'images/dark_knight.jpg',
                'time' => '2h 32min',
            ],
        ];

        foreach ($movies as $movieData) {
            Movie::create($movieData);
        }
    }
}
