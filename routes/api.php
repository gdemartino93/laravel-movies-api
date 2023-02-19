<?php

use App\Http\Controllers\Api\V1\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'v1'], function(){
    Route::get('/', [MovieController :: class, 'home']);

    Route::get('/movie/create', [MovieController :: class, 'addnew']);
    Route::post('/movie/create', [MovieController :: class, 'store']);
});
