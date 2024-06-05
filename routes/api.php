<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieBroadcastController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// get all movies
Route::get('/movies', [MovieController::class, 'index']);

// single movie by id
Route::get('/movies/{id}', [MovieController::class, 'show']);

// create movie
Route::post('/movies', [MovieController::class, 'store']);

//  drop movie 
Route::delete('/movies/{id}', [MovieController::class, 'destroy']);

// adding new broadcast
Route::post('/movie-broadcasts', [MovieBroadcastController::class, 'store']);

