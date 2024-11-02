<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function listar()
    {
        $pokemons = Pokemon::all();
        return view('pokemon.index', compact('pokemons'));
    }
    
    public function criar()
    {
        return view('pokemon.create');
    }
    
    public function salvar(Request $request)
    {
        Pokemon::create($request->all());
        return redirect('pokemon')->with('success', 'Pokemon salvo com sucesso.');
    }
    
    public function editar($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemon.edit', compact('pokemon'));
    }
    
    public function atualizar(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($request->all());
        return redirect('pokemon')->with('success', 'Pokemon atualizado com sucesso.');
    }
    
    public function deletar($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect('pokemon')->with('success', 'Pokemon deletado com sucesso.');
    }
}
