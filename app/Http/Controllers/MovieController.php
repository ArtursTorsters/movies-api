<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{

    // create movie
    public function store(Request $request)
    {

     // creating new movie
        $movie = Movie::create([
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
            'age_restriction' => $request->input('age_restriction'),
            'description' => $request->input('description'),
            'premieres_at' => $request->input('premieres_at'),
        ]);
        return response()->json($movie, 200);
    }

    // movie list by titlte
    public function index(Request $request)
    {
        $query = Movie::query();

        // searh by title  ex: http://localhost:8000/api/movies?title=x-Men
        if ($request->has('title')) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }
        // return movies by date and 10 at time
        return $query->orderBy('created_at', 'desc')->paginate(10);
    }

    // get movie by its ID
    public function show($id)
    {
        // finding by id
        $movie = Movie::findOrFail($id);
        // getting the broadcasts / 10 by page
        $broadcasts = $movie->broadcasts()->orderBy('broadcasts_at')->paginate(10);
        return [
            'movie' => $movie,
            'broadcasts' => $broadcasts
        ];
    }
    // delete
    public function destroy($id)
    {
        // find by ID
        $movie = Movie::findOrFail($id);

        // delete movie
        $movie->delete();
        // response
        return response()->json(['message' => 'Deleted'], 204);
    }
}
