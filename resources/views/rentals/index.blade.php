@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Rentals</h1>
    <a href="{{ route('rentals.create') }}" class="btn btn-primary">Add Rental</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Game</th>
                <th>Rental Date</th>
                <th>Return Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rentals as $rental)
                <tr>
                    <td>{{ $rental->id }}</td>
                    <td>{{ $rental->user->name }}</td>
                    <td>{{ $rental->game->title }}</td>
                    <td>{{ $rental->rental_date }}</td>
                    <td>{{ $rental->return_date }}</td>
                    <td>
                        <a href="{{ route('rentals.show', $rental->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('rentals.edit', $rental->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" style="display:inline;">
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
