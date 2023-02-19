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
    
    $movies = Movie :: with('genre') -> get();
    return response() -> json([
        'movies' => $movies
    ]);
   }
   public function addnew(){
    $genres = Genre::all();
    return response() -> json([
        'genres' => $genres
    ]);
   }
}
