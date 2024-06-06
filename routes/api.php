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
// create movie
Route::post('/movies', [MovieController::class, 'store']);
// single movie by id
Route::get('/movies/{id}', [MovieController::class, 'show']);
//  drop movie
Route::delete('/movies/{id}', [MovieController::class, 'destroy']);
// add broadcast to a movie
Route::post('/movies/{id}/broadcasts', [MovieBroadcastController::class, 'store']);

