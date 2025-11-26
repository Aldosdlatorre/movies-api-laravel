<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::orderBy('title')->get();
    }

    public function show(Movie $movie)
    {
        return $movie;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'cover_url' => 'required|url',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        $movie = Movie::create($data);

        return response()->json($movie, 201);
    }

    public function update(Request $request, Movie $movie)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'cover_url' => 'required|url',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        $movie->update($data);

        return $movie;
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return response()->json(null, 204);
    }
}
