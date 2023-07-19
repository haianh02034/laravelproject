<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function ShowMovie()
    {
        $movie = Movie::latest()->paginate(9);

        return view('admin.movieadd', compact('movie'))
            ->with('i', (request()->input('page', 1) - 1) * 9);
    }

    public function add()
    {
        $movies = Movie::all();
        return view('admin.movieadd',['movies' => $movies]);
    }
    
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [

                'title' => 'required',
                'category' => 'required',
                'director' => 'required',
                'performer' => 'required',
                'producer' => 'required',
                'release_year' => 'required',
                'National_production' => 'required',
                'time' => 'required',
                'movie_photo' => 'required|image|mimes:jpg,jpeg,png|max:1000',
                'language' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            if ($request->hasFile('movie_photo')) {
                $file = $request->file('movie_photo');
                $path = public_path('images/movie');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $fileName);
            } else {
                $fileName = 'noname.jpg';
            }
            
            $newMovie = new Movie();
            $newMovie->title = $request->title;
            $newMovie->category = $request->category;
            $newMovie->director = $request->director;
            $newMovie->performer = $request->performer;
            $newMovie->producer = $request->producer;
            $newMovie->release_year = $request->release_year;
            $newMovie->National_production = $request->National_production;
            $newMovie->time = $request->time;
            $newMovie->language = $request->language;
            $newMovie->movie_photo = $fileName;
            $newMovie->save();
            return redirect()->route('admin.movies')
                ->with('success', 'Movie created successfully.');
        }
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);
        $image_path = "/image/movie/.$movie->image";  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $movie->delete();
        return redirect()->route('admin.movies')
            ->with('success', 'Movie deleted successfully');
    }

    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('admin.movieedit', ['movie' => $movie]);
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'category' => 'required',
                'producer' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            $fileName="";
            if ($request->hasFile('movie_photo')) {
                $file = $request->file('movie_photo');
                $path = public_path('image/movie');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $fileName);
            }
            $Movie = Movie::find($id);
            if ($Movie != null) {  
                $Movie->title = $request->title;
                $Movie->category = $request->category;
                $Movie->director = $request->director;
                $Movie->performer = $request->performer;
                $Movie->producer = $request->producer;
                $Movie->release_year = $request->release_year;
                $Movie->National_production = $request->National_production;
                $Movie->time = $request->time;
                $Movie->language = $request->language; 
                if ($fileName) {
                    $Movie->image = $fileName;
                }
                
                $Movie->save();
                return redirect()->route('admin.movies')
                ->with('success', 'Movie updated successfully');
            } 
            else
            {
                return redirect()->route('admin.movies')
                ->with('Error', 'Movie not update');
            }         
        }       
    }
}