<?php

// app/Http/Controllers/GameController.php
namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        Game::create($request->all());
        return redirect()->route('games.index');
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return redirect()->route('games.index');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('games.index');
    }
}

