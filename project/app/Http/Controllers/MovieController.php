<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
//        $movies = Movie::all();
        $query = Movie::query();
        $query->orderBy('date', 'desc');

        $movies = $query->get();
        return view('movie.index', compact('movies'));
    }

    public function indexAsc()
    {
        $query = Movie::query();
        $query->orderBy('date', 'asc');

        $movies = $query->get();
        return view('movie.index', compact('movies'));
    }
    public function indexRatingAsc()
    {
        $query = Movie::query();
        $query->orderBy('rating', 'asc');

        $movies = $query->get();
        return view('movie.index', compact('movies'));
    }
    public function indexRatingDesc()
    {
        $query = Movie::query();
        $query->orderBy('rating', 'desc');

        $movies = $query->get();
        return view('movie.index', compact('movies'));
    }
    public  function indexRating(Request $request)
    {
        $query = Movie::query();
//        print_r($request->input('rating'));
        $rating = $request->input('rating');
        $query->where('rating', '=', $rating);
        $movies = $query->get();
        return view('movie.index', compact('movies'));
    }
    public function show(int $id)
    {
        $movie = Movie::find($id);
        return view('movie.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'rating'=>'required',
            'date'=>'required'
        ]);
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->rating = $request->rating;
        $movie->date = $request->date;

        $movie->save();
        return redirect()->route('movie.index')->with('sucess', 'film edit');
    }
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movie.index')->with('sucess', 'film delete');
    }
    public function create()
    {
        return view('movie.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'rating'=>'required',
            'date'=>'required'
        ]);
        $movie = new Movie();
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->rating = $request->rating;
        $movie->date = $request->date;

        $movie->save();
        return redirect()->route('movie.index')->with('sucess', 'film add');
    }
}
