@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Rental</h1>
    <form action="{{ route('rentals.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User</label>
            <select class="form-control" id="user_id" name="user_id" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="game_id">Game</label>
            <select class="form-control" id="game_id" name="game_id" required>
                @foreach($games as $game)
                    <option value="{{ $game->id }}">{{ $game->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="rental_date">Rental Date</label>
            <input type="date" class="form-control" id="rental_date" name="rental_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
