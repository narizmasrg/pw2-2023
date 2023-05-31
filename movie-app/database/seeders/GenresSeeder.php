<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Genre::created([
        'nama' => 'Action',
        'deskripsi' => 'Action-packed movies',
       ]);

       Genre::created([
        'nama' => 'Drama',
        'deskripsi' => 'Action-packed movies',
       ]);
    }
}
