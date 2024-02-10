<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
        $newComic->sale_date = Carbon::createFromFormat('d/m/Y', $formData['sale_date'])->format('Y-m-d');
        $newComic->type = $formData['type'];
        $newComic->artists = $formData['artists'];
        $newComic->writers = $formData['writers'];
        $newComic->save();


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
    public function update(Request $request, Comic $comic)
    {

        $request->validate([
            'title' => ['required', 'min:4', 'max:40', Rule::unique('comics')->ignore($comic->id)],
            'description' => ['required', 'min:10', 'max:2000'],
            'thumb' => ['required', 'min:4', 'url:http,https'],
            'price' => ['required', 'min:1', 'max:15'],
            'series' => ['required', 'min:10', 'max:40'],
            'sale_date' => ['required', 'min:4', 'max:25'],
            'type' => ['required', 'min:4', 'max:25'],
            'artists' => ['required', 'min:4', 'max:1000'],
            'writers' => ['required', 'min:4', 'max:1000'],
        ], [
            'title.required' => 'Per favore, inserisci un titolo',
            'description.required' => 'per favore, inserisci una descrizione',
            'thumb.required' => 'per favore, inserisci un\' immagine',
            'price.required' => 'per favore, inserisci un prezzo',
            'series.required' => 'per favore, inserisci una serie',
            'sale_date.required' => 'per favore, inserisci una data',
            'type.required' => 'per favore, inserisci un genere',
            'artists.required' => 'per favore, inserisci uno o più artisti',
            'writers.required' => 'per favore, inserisci uno o più scrittori',
        ]);
        $data = $request->all();

        //? $comic = Comic::findOrFail($id); in automatico se D.I.
        
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists =  json_encode($data['artists']);
        $comic->writers =  json_encode($data['writers']);
        $comic->save();

        // $comic->update($data);

        return redirect()->route('guest.comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}