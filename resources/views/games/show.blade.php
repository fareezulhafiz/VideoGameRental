@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Game Details</h1>
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
    <a href="{{ route('games.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
