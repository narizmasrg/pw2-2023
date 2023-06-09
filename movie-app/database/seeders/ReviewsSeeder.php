<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Jujutsu kaisen',
            'user' => 'Gege Akutami',
            'rating' => '9.4',
            'review' => 'Filmnya sangat bagus',
            'tahun' => '2022-05-12',

        ]);

        Review::create([
            'film' => 'Black Panther',
            'user' => 'Ryan Coogler',
            'rating' => '8.6',
            'review' => 'Seru banget',
            'tahun' => '2018-12-07',

        ]);

        Review::create([
            'film' => 'Miracle: Letters to the President',
            'user' => 'Lee Jang-hoon',
            'rating' => '8.8',
            'review' => 'Asik',
            'tahun' => '2021-09-19',

        ]);

        Review::create([
            'film' => 'Pengabdi setan 2',
            'user' => 'Joko Anwar',
            'rating' => '8.5',
            'review' => 'Dramanya bagus',
            'tahun' => '2022-08-04',

        ]);

        Review::create([
            'film' => 'The Little Mermaid',
            'user' => 'Rob Mashal',
            'rating' => '9.3',
            'review' => 'seru',
            'tahun' => '2023-05-24',

        ]);
    }
}