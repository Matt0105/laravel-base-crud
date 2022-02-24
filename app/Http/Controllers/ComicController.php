<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(10);
        
        return view("comics.index", ["title" => "All Comics", "comics" => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create", ["title" => "Add New Comic"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newData = $request->all();

        $newComic = new Comic();

        $newComic->name = $newData["name"];
        $newComic->brand = $newData["brand"];
        $newComic->editor = $newData["editor"];
        $newComic->artists = $newData["artists"];
        $newComic->authors = $newData["authors"];
        $newComic->price = $newData["price"];
        $newComic->thumb = $newData["thumb"];

        $saved = $newComic->save();

        if(!$saved) {
            dd("Errore nel salvataggio");
        }

        return redirect()->route("comics.show", $newComic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        return view("comics.show", ["title" => $comic->name, "comic" => $comic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $updateData = $request;

        $comic->name = $request["name"];
        $comic->brand = $request["brand"];
        $comic->editor = $request["editor"];
        $comic->artists = $request["artists"];
        $comic->authors = $request["authors"];
        $comic->price = $request["price"];
        $comic->thumb = $request["thumb"];

        $saved = $comic->save();

        if(!$saved) {
            dd("Errore nell'aggiornamento");
        }

        return redirect()->route("comics.show", compact("comic"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
