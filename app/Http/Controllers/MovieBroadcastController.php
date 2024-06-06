<?php

namespace App\Http\Controllers;

use App\Models\MovieBroadcast;
use Illuminate\Http\Request;
class MovieBroadcastController extends Controller
{
    public function store(Request $request)
    {
        // protected $fillable = ['movie_id', 'channel_nr', 'broadcasts_at'];
        // creating movie broadcast
        $movieBroadcast = MovieBroadcast::create([
            'movie_id' => $request->input('movie_id'),
            'channel_nr' => $request->input('channel_nr'),
            'broadcasts_at' => $request->input('broadcasts_at'),
        ]);

        return response()->json($movieBroadcast, 200);
    }
}
