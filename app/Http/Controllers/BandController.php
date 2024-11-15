<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    public function index()
    {
        $bands = Band::all();
        return view('bands.index', compact('bands'));
    }

    public function show(Band $band)
    {
        return view('bands.show', compact('band'));
    }

    public function create()
    {
        return view('bands.create');
    }

    public function edit(Band $band)
    {
        return view('bands.edit', compact('band'));
    }

    public function destroy(Band $band)
    {
        $band->delete();
        return redirect()->route('bands.index');
    }

    public function update(Request $request, Band $band)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'founded' => ['required', 'integer', 'max:' . date('Y')],
            'active_until' => [
                'required',
                function ($attribute, $value, $fail) use ($request) {
                    if (!is_numeric($value) && $value !== 'heden') {
                        $fail('The ' . $attribute . ' must be either a valid year or "heden".');
                    }
                    if (is_numeric($value) && $value <= $request->input('founded')) {
                        $fail('The active until year must be greater than the founded year.');
                    }
                    if (is_numeric($value) && $value > date('Y')) {
                        $fail('The active until year must not be in the future.');
                    }
                },
                'max:' . date('Y'),
            ],
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'genre.required' => 'The genre field is required.',
            'genre.string' => 'The genre must be a string.',
            'genre.max' => 'The genre may not be greater than 255 characters.',
            'founded.required' => 'The founded field is required.',
            'founded.integer' => 'The founded year must be a number.',
            'founded.max' => 'The founded year must be before or equal to the current year.',
            'active_until.required' => 'The active until field is required.',
            'active_until.max' => 'The active until year must be before or equal to the current year.',
        ]);

        $band->name = $request->input('name');
        $band->genre = $request->input('genre');
        $band->founded = $request->input('founded');
        $band->active_until = $request->input('active_until');
        
        $band->save();
        
        return redirect()->route('bands.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'founded' => ['required', 'integer', 'max:' . date('Y')],
            'active_until' => [
                'nullable',
                function ($attribute, $value, $fail) use ($request) {
                    if ($value && !is_numeric($value) && $value !== 'heden') {
                        $fail('The ' . $attribute . ' must be either a valid year or "heden".');
                    }
                    if (is_numeric($value)) {
                        if ($value <= $request->input('founded')) {
                            $fail('The active until year must be greater than the founded year.');
                        }
                        if ($value > date('Y')) {
                            $fail('The active until year must not be in the future.');
                        }
                    }
                },
            ],
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'genre.required' => 'The genre field is required.',
            'genre.string' => 'The genre must be a string.',
            'genre.max' => 'The genre may not be greater than 255 characters.',
            'founded.required' => 'The founded field is required.',
            'founded.integer' => 'The founded year must be a number.',
            'founded.max' => 'The founded year must be before or equal to the current year.',
            'active_until.max' => 'The active until year must be before or equal to the current year.',
        ]);

        $band = new Band();
        $band->name = $request->input('name');
        $band->genre = $request->input('genre');
        $band->founded = $request->input('founded');
        $band->active_until = $request->input('active_until');
        $band->save();

        return redirect()->route('bands.index');
    }
}
