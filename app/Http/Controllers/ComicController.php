<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'DESC')->get();
        
        return view('guest.comics.index', compact('comics'));
    }
     /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('guest.comics.show', compact('comic')); 
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $newComic = new Comic();
        $newComic->title = $formData['title'];
        $newComic->description = $formData['description'];
        $newComic->thumb = $formData['thumb'];
        $newComic->price = $formData['price'];
        $newComic->series = $formData['series'];
        $newComic->sale_date = $formData['sale_date'];
        $newComic->type = $formData['type'];
        $newComic->artists = $formData['artists'];
        $newComic->writers = $formData['writers'];
        


        return redirect()->route('guest.comics.show', $newComic->id);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('guest.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
