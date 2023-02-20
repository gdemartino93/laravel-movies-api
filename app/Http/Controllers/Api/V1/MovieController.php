<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function home(){
    
    $movies = Movie :: with('genre') -> orderBy('created_at','DESC')-> get();
    return response() -> json([
        'movies' => $movies
    ]);
   }
   public function addnew(){
    $genres = Genre::all();
    $movies = Movie::all();
    return response() -> json([
        'genres' => $genres,
        'movies' => $movies
    ]);
   }
   public function store(Request $request){

    $data = $request -> validate([
        'name' => 'required|max:32',
        'description' => 'required|max:256',
        'cover' => 'required',
        'vote' => 'min:1|max:5',
        'year' => 'required',
        'genre_id' => 'required'
    ]);
    $genre = Genre :: find($data['genre_id']);
    $movie = Movie :: make($data);

    $movie -> genre() -> associate($genre);
    $movie -> save();

    return response() -> json("ok asd");
   }
}
