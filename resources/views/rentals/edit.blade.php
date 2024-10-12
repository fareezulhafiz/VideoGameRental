@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Rental</h1>
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
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
