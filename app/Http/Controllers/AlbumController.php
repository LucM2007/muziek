<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albums;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Albums::all();
        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Albums $album)
    {
        return view('albums.create', compact('album'));
    }
    public function store(Request $request, Albums $album)
    {
        $messages = [
            'name.required' => 'The album title is required.',
            'year.required' => 'The release year is required.',
            'year.regex' => 'The release year must be a valid four-digit year.',
            'year.max' => 'The release year must not be in the future.',
        ];
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'year' => ['required', 'regex:/^\d{4}$/', 'max:' . date('Y')],
        ], $messages);
        
    
        $album->create($request->except('_token'));
    
        return redirect()->route('albums.index');
    }
        public function show(Albums $album)
    {
        return view('albums.show', compact('album'));
    }
    public function edit(Albums $album)
    {
        return view('albums.edit', compact('album'));
    }
    public function update(request $request,Albums $album)
    {
        $messages = [
            'name.required' => 'The album title is required.',
            'year.required' => 'The release date is required.',
            'year.date' => 'The release date must be a valid date not in the future.' ,
        ];

        $request->validate([
            'name' => 'required','string','max:255',
                        'year' => ['required', 'regex:/^\d{4}$/', 'max:' . date('Y')],
        ], $messages);
        $album->update(request()->except('_token'));
        return redirect()->route('albums.index');
    }
    public function destroy(Albums $album)
    {
        $album->delete();
        return redirect()->route('albums.index');
    }
}
