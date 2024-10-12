@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Games</h1>
    <a href="{{ route('games.create') }}" class="btn btn-primary">Add Game</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->genre }}</td>
                    <td>{{ $game->price }}</td>
                    <td>
                        <a href="{{ route('games.show', $game->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('games.edit', $game->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
