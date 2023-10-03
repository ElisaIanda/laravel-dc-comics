<?php

namespace App\Http\Controllers;
// use App\Http\Requests\UpdatePastaRequest;
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
        $data = $request->validate([
            "title" => "required|string",
            "description" => "string",
            "thumb" => "string",
            "price" => "decimal:0,2",
            "series"=>"string",
            "sale_date" => "date",
            "type" => "string",
            "artists" => "string",
            "writers" => "string"
        ]);  

        $data["artists"] = explode(",", $data["artists"]);
        $data["writers"] = explode(",", $data["writers"]);

        $newComic = new Comic();
        $newComic->fill($data);

        $newComic->save();

        return redirect()->route('comics.index', $newComic->id);
    }

    public function edit($id){
        $comics = Comic::findOrFail($id);

        return view("comics.edit", ["comics" => $comics]);
    }

    public function update(Request $request, $id){
        $comics = Comic::findOrFail($id);

        $data = $request->validate([
            "title" => "required|string",
            "description" => "string",
            "thumb" => "string",
            "price" => "decimal:0,2",
            "series"=>"string",
            "sale_date" => "date",
            "type" => "string",
            "artists" => "string",
            "writers" => "string"
        ]);  

        $data["artists"] = explode(",", $data["artists"]);
        $data["writers"] = explode(",", $data["writers"]);

        $comics->update($data);

        return redirect()->route('comics.show', $comics->id);
    }
}
