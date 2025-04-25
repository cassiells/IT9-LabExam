<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{

    public function index()
    {
        $characters = Character::all();
        return view('characters.index', compact('characters'));
    }
    public function create()
    {
        return view('characters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'power' => 'nullable',
            'universe' => 'nullable',
        ]);

        Character::create($request->all());

        return redirect()->route('characters.index')
                         ->with('success', 'Character created successfully');
    }

    public function edit(Character $character)
    {
        return view('characters.edit', compact('character'));
    }

    public function update(Request $request, Character $character)
    {
        $request->validate([
            'name' => 'required',
            'power' => 'nullable',
            'universe' => 'nullable',
        ]);

        $character->update($request->all());

        return redirect()->route('characters.index')
                         ->with('success', 'Character updated successfully');
    }

    public function destroy(Character $character)
    {
        $character->delete();

        return redirect()->route('characters.index')
                         ->with('success', 'Character deleted successfully');
    }
}
