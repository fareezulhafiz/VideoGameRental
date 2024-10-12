@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Rental Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $rental->id }}</td>
        </tr>
        <tr>
            <th>User</th>
            <td>{{ $rental->user->name }}</td>
        </tr>
        <tr>
            <th>Game</th>
            <td>{{ $rental->game->title }}</td>
        </tr>
        <tr>
            <th>Rental Date</th>
            <td>{{ $rental->rental_date }}</td>
        </tr>
        <tr>
            <th>Return Date</th>
            <td>{{ $rental->return_date }}</td>
        </tr>
    </table>
    <a href="{{ route('rentals.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
