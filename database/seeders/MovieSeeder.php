<?php

namespace Database\Seeders;

use App\Models\Actor;
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

            // andiamo a popolare la tabella pivot assegnando un numero di attori casuali da 3 a 5
            $actors = Actor :: inRandomOrder() -> limit(rand(3,5)) -> get();
            $m -> actors() -> sync($actors);
            // questo actors è la funziona che abbiamo nel model di Movie
        });
    }
}
