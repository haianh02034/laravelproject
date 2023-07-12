<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< Updated upstream:app/Http/trash/HomeController.php
    public function showMovie()
    {
        $movies = Movie::all();
        return view('admin.movies') ->with('movies', $movies);
    }  
=======
    public function index()
    {
        $movies = Movie::all();    
        return view('index')->with('movies', $movies);
    }     
>>>>>>> Stashed changes:app/Http/Controllers/HomeController.php
}



