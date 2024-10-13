@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Edit Game</h1>

<div class="container mb-5" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); padding: 20px;">
    <form action="{{ route('games.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $game->title }}" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $game->genre }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $game->price }}" required>
        </div>
        <div class="mt-4"> <!-- Add margin top to create space above the button -->
            <button type="submit" class="btn" style="background-color:rgb(5, 130, 175); color: white; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">Update</button>
        </div>
    </form>
</div>
@endsection
