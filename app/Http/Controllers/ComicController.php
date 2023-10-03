<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;


class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", ["comics" => $comics]);
    }

    public function show($id)
    {
        $comics = Comic::findOrFail($id);


        return view("comics.show", ["comics" => $comics]);
    }

    public function create()
    {
        return view("comics.create");
    }

    public function store(Request $request)
    {
        $comics = $request->all();  

        $comics["artists"] = explode(",", $comics["artists"]);
        $comics["writers"] = explode(",", $comics["writers"]);

        $newComic = new Comic();
        $newComic->fill($comics);

        $newComic->save();

        return redirect()->route('comics.index', $newComic->id);
    }
}
