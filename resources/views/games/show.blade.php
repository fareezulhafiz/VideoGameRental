@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Game Details</h1> <!-- Changed font and color -->

<div class="container mb-5" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); padding: 20px;">
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $game->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $game->title }}</td>
        </tr>
        <tr>
            <th>Genre</th>
            <td>{{ $game->genre }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $game->price }}</td>
        </tr>
    </table>
    <a href="{{ route('games.index') }}" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">Back</a> <!-- Changed button style -->
</div>
@endsection
