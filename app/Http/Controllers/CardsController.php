<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    // index, create, store, show, edit, update, destroy

    public function index() {
        // $cards = DB::table('cards')->get();
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function show(Card $card) {
        return view('cards.show', compact('card'));
    }

    public function create() {
        return view('cards.create');
    }

    public function store(Card $card) {
        DB::table('cards')->insert(['title' => $card["title"], 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        Card::create($card);
        return view('cards.show', compact('card'));
    }
    
}
