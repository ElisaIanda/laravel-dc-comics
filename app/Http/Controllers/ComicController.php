<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();

        return view("comics.index",[ "comics" => $comics]);
    }

    public function show($id) {
        $comics = Comic::findOrFail($id);


        return view("comics.show", ["comics" => $comics]);
    }
}
