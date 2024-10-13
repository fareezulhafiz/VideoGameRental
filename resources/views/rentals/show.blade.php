@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">Rental Details</h1>
<div class="container mt-5" style="background-color: rgba(0, 0, 0, 0.7); border-radius: 15px; padding: 20px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
    <div class="card" style="border: none; border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
        <div class="card-body">
            <table class="table">
                <tr>
                    <th class="font-weight-bold">ID</th>
                    <td>{{ $rental->id }}</td>
                </tr>
                <tr>
                    <th class="font-weight-bold">User</th>
                    <td>{{ $rental->user->name }}</td>
                </tr>
                <tr>
                    <th class="font-weight-bold">Game</th>
                    <td>{{ $rental->game->title }}</td>
                </tr>
                <tr>
                    <th class="font-weight-bold">Rental Date</th>
                    <td>{{ $rental->rental_date }}</td>
                </tr>
                <tr>
                    <th class="font-weight-bold">Return Date</th>
                    <td>{{ $rental->return_date }}</td>
                </tr>
            </table>
            <a href="{{ route('rentals.index') }}" class="btn" style="background-color:rgb(5, 130, 175); color: white; font-family: 'Press Start 2P', cursive; width: 100%; padding: 15px; font-size: 20px; border-radius: 8px;">Back</a>
        </div>
    </div>
</div>
@endsection
