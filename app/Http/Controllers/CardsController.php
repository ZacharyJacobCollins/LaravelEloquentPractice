<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Card;

class CardsController extends Controller
{
    public function index() 
    {
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }


    //Shows a single card and all associatted notes
    public function show(Card $card) {

        return view('cards.show', compact('card'));        
    }
}
