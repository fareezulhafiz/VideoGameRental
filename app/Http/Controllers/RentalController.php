<?php

// app/Http/Controllers/RentalController.php
namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\User;
use App\Models\Game;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::with(['user', 'game'])->get();
        return view('rentals.index', compact('rentals'));
    }

    public function create()
        {
            $users = User::all();
            $games = Game::all();
            return view('rentals.create', compact('users', 'games'));
        }


    public function store(Request $request)
        {
            $request->validate([
                'user_id' => 'required|exists:users,id',
                'game_id' => 'required|exists:games,id',
                'rental_date' => 'required|date',
            ]);

            Rental::create($request->all());

            return redirect()->route('rentals.index')->with('success', 'Rental created successfully.');
        }


    public function show(Rental $rental)
    {
        return view('rentals.show', compact('rental'));
    }

    public function edit(Rental $rental)
        {
            $users = User::all();
            $games = Game::all();
            return view('rentals.edit', compact('rental', 'users', 'games'));
        }


    public function update(Request $request, Rental $rental)
        {
            $request->validate([
                'user_id' => 'required|exists:users,id',
                'game_id' => 'required|exists:games,id',
                'rental_date' => 'required|date',
                'return_date' => 'nullable|date',
            ]);

            $rental->update($request->all());

            return redirect()->route('rentals.index')->with('success', 'Rental updated successfully.');
        }


    public function destroy(Rental $rental)
    {
        $rental->delete();
        return redirect()->route('rentals.index');
    }
}
