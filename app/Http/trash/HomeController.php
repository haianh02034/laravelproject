<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showMovie()
    {
        $movies = Movie::all();
        return view('admin.movies') ->with('movies', $movies);
    }  
}
