@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Edit Rental</h1>
<div class="container mb-5" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 15px; padding: 20px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
    
    <!-- Form Container -->
    <div class="card p-4" style="border: none; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border-radius: 15px;"> <!-- Adding a card for styling -->
        <form action="{{ route('rentals.update', $rental->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">User</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if($user->id == $rental->user_id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="game_id">Game</label>
                <select class="form-control" id="game_id" name="game_id" required>
                    @foreach($games as $game)
                        <option value="{{ $game->id }}" @if($game->id == $rental->game_id) selected @endif>{{ $game->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="rental_date">Rental Date</label>
                <input type="date" class="form-control" id="rental_date" name="rental_date" value="{{ $rental->rental_date }}" required>
            </div>
            <div class="form-group">
                <label for="return_date">Return Date</label>
                <input type="date" class="form-control" id="return_date" name="return_date" value="{{ $rental->return_date }}">
            </div>
            <button type="submit" class="btn" style="background-color:rgb(5, 130, 175); color: white; font-family: 'Press Start 2P', cursive; padding: 10px 20px; width: 100%; margin-top: 20px;">Update</button> <!-- Added margin-top here -->
        </form>
    </div>
</div>
@endsection
