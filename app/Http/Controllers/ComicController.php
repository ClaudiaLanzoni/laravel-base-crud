<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        
        $comics = Comic::orderBy('author')->get(); //ricordarsi di mettere get() alla fine
        return view ('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    //request è un oggetto con delle proprietà
    //che è tutto ( all() ) ciò che viene richiesto da una chiamata post (perchè siamo in store)
    //Request è oggetto, $request è la classe
    {
        $data = $request->all();
        
        $comic = new Comic();
        //metodo manuale
        //$comic->title = $data['title'];

        $comic = Comic::create($data);
        $comic->save();

        return redirect()->route('comics.index'); //di solito ('comics.show', $comic->id)
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id); //è lo stesso id che esiste in store!!!
        //in alternativa si poteva mettere come parametro Comic $comic con depemdemcy injection
        
        $data = $request->all();

        $comic->update($data); //non c'è bisogno di fare un nuovo oggetto $comic = Comic::create($data);
        // come in store perchè non ne crea uno nuovo, basta update() al posto di save()

        return redirect()->route('comics.index'); //di solito ('comics.show', $comic->id)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
