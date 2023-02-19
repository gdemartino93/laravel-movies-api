<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Models\Actor;
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
   public function store(StoreMovieRequest $request){
    Movie :: create($request -> validated());
    return response() -> json('asd');
   }
}
