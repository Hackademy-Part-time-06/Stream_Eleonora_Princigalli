<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremovieRequest;
use App\Http\Requests\UpdatemovieRequest;
use App\Models\movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies= movie::all();

        return view('movies.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremovieRequest $request)
    {
        $path_image = '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $path_name);
        }
        movie::create([

            'name' => $request-> name,
            'durata' => $request-> durata,
            'image' => $path_image,
        ]);
          
          
            
         return redirect()->route('movies.index')   ;
    }

    /**
     * Display the specified resource.
     */
    public function show(movie $movie)
    {
        return view('movies.show', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(movie $movie)
    {
       return view('movies.edit', compact('movies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemovieRequest $request, movie $movie)
    {
        
        $path_image = $movie->image;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $path_name);
        }

        $movie->update([
            'title' => $request->input('title'),
            'image' => $path_image
        ]);
        $movie->directors()->sync($request->directors);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movie $movie)
    {
        //
    }
}
