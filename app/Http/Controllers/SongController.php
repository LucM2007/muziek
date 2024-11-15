<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }

    public function show(Song $song)
    {
        return view('songs.show', compact('song'));
    }

    public function create(Song $song)
    {
        return view('songs.create');
    }

    public function edit(song $Song)
    {
        return view('songs.edit', compact('Song'));
    }
    public function destroy(song $Song)
    {
        $Song->delete();
        return redirect()->route('songs.index');
    }
    public function update(song $Song)
    {
        $Song->update(request()->all());
        return redirect()->route('songs.index');
    }
    public function store(Request $request, Song $Song)
    {
        $validator = \Validator::make($request->all(), 
        [
        'title' =>  'required|string|max:100|regex:/^[a-zA-Z0-9\s\-&,\']+$/',
        'singer' => '|string|max:100|regex:/^[a-zA-Z0-9\s\-&,\']+$/'
        ],
        [
            "title.required " => "je moet een title invullen.",
            "title.max" => "het maximalen is 100 caracters.",
            "title.regex" => "je mag allen letters, cijfers, - , ' en . gebruiken.",
            "singer.max" => "het maximalen is 100 caracters.",
            "singer.regex" => "je mag allen letters, cijfers, ' en . gebruiken."
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                     ->withErrors($validator)
                     ->withInput();
        }
        Song::create([
            'title' => $request->input('title'),
            'singer' => $request->input('singer')
        ]);

        return redirect()->route('songs.index');
    }
}
