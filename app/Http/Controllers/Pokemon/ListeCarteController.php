<?php
namespace App\Http\Controllers\Pokemon;

use App\Http\Controllers\Controller;
use Pokemon\Pokemon;
use App\Models\Block;

class ListeCarteController extends Controller
{

    public function seriesPokemon()
    {

        $blocks = Block::where('univers', 'Pokemon')->orderBy('id')->get();
        return view('pokemon/liste-cartes-series', ['blocks' => $blocks]);
    }
    
    public function setsPokemon($id) {
        
        $block = Block::where('id' , $id)->first();
        $sets = Pokemon::Set()->where(['series' => $block->name])->all();
        return view('pokemon/liste-cartes-sets', ['sets' => $sets]);
    }
    
    public function cardsPokemon($id) {
        
        $cards = Pokemon::Card()->where(['setCode' => $id])->all();
       
        return view('pokemon/liste-cartes', ['cards' => $cards]);
    }
    
    
}