<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie :: factory() -> count(100) -> make() -> each(function($m){
            $genre = Genre :: inRandomOrder() -> first();
            // genre() è la funziona definita nel model di Movie
            $m -> genre() -> associate($genre);
            $m -> save();
            //  Column not found: 1054 Unknown column 'genre_id' in 'field list'
            // andare nella migration add foreign key e verificare il nome della colonna
        });
    }
}
