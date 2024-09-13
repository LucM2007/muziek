<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    protected $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'paint it black', 'Ace of spades'];

    public function index()
    {
        return view('songs.index', ['songs' => $this->songs]);
    }

    public function show($index)
    {
        if (!isset($index, $this->songs)) {
            abort(404, 'Song not found');
        }
        $song = $this->songs[$index] ?? 'Song not found';
        return view('songs.show',  compact( 'song',  'index'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function edit($index)
    {
        $song = $this->songs[$index] ?? 'Song not found';
        return view('songs.edit', ['song' => $song, 'index' => $index]);
    }
    public function store()
    {
    }
    public function update()
    {
    }
    public function destroy()
    {
    }
}
