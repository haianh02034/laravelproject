<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showMovies()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }  
}
