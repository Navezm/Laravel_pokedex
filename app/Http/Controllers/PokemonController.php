<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        $types = Type::all();
        return view('pages.pokemon.pokemon', compact('pokemons', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pokemons = Pokemon::all();
        $types = Type::all();
        return view('pages.pokemon.create', compact('pokemons', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'lvl' => 'required',
            'src' => 'required',
        ]);
        $newEntry = new Pokemon;
        $newEntry->name = $request->name;
        $newEntry->lvl = $request->lvl;
        $request->file('src')->storePublicly('img/', 'public');
        $newEntry->src = $request->file('src')->hashName();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        $show = $pokemon;
        return view('pages.pokemon.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        $edit = $pokemon;
        $types = Type::all();
        return view('pages.pokemon.edit', compact('edit', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pokemon $pokemon)
    {
        $pokemon->name = $request->name;
        $pokemon->lvl = $request->lvl;
        Storage::disk('public')->delete('img/'.$pokemon->src);
        $request->file('src')->storePublicly('img/', 'public');
        $pokemon->src = $request->file('src')->hashName();
        $pokemon->save();
        return redirect('pokemons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        //
    }
}
