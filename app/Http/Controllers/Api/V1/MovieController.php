<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Actor;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function home(){
    
    $movies = Movie :: with('actors','genre') -> get();
    return response() -> json([
        'data' => $movies
    ]);
   }
}
