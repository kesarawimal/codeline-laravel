<?php

namespace App\Http\Controllers;

use App\comments;
use App\films;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmsController extends Controller
{
    public function show() {
        $films = Films::all();
        return view("movies", ['films' => $films]);
    }

    public function create(Request $request) {

        Storage::put($request->file, $request->file('file'));

        $film = new films();
        $film->name = $request->name;
        $film->description = $request->description;
        $film->realease_date = $request->date;
        $film->rating = $request->rate;
        $film->ticket_price = $request->price;
        $film->country = $request->country;
        $film->photo = "/storage/app/" . urlencode($request->file);
        $film->slug = str_replace(" ", "-", $request->name);
        $film->save();

        return redirect('films');
    }

    public function one($slug) {
        $film = Films::where('slug', $slug)->first();
        $comments = Comments::where('slug', $slug)->get();
        return view("one_movie", ['film' => $film, 'comments' => $comments]);
    }
}
