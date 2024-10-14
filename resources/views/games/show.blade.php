@extends('layouts.app')

@section('content')
<h1 class="text-center mb-4" style="color: yellow; font-family: 'Press Start 2P', cursive;">
    <i class="fas fa-gamepad"></i> Game Details
</h1>

<div class="container mb-5">
    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(0, 0, 0, 0.9); color: white;">
        <div class="table-responsive">
            <table class="table table-striped table-hover text-dark" style="background-color: white;">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center" style="width: 30%;">Field</th>
                        <th class="text-center" style="width: 70%;">Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="background-color: rgba(255, 255, 255, 0.8);"><i class="fas fa-id-card"></i> ID</td>
                        <td class="text-center" style="background-color: rgba(255, 255, 255, 0.9);">{{ $game->id }}</td>
                    </tr>
                    <tr>
                        <td class="text-center" style="background-color: rgba(255, 255, 255, 0.8);"><i class="fas fa-title"></i> Title</td>
                        <td class="text-center" style="background-color: rgba(255, 255, 255, 0.9);">{{ $game->title }}</td>
                    </tr>
                    <tr>
                        <td class="text-center" style="background-color: rgba(255, 255, 255, 0.8);"><i class="fas fa-tags"></i> Genre</td>
                        <td class="text-center" style="background-color: rgba(255, 255, 255, 0.9);">{{ $game->genre }}</td>
                    </tr>
                    <tr>
                        <td class="text-center" style="background-color: rgba(255, 255, 255, 0.8);"><i class="fas fa-dollar-sign"></i> Price</td>
                        <td class="text-center" style="background-color: rgba(255, 255, 255, 0.9);">{{ $game->price }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('games.index') }}" class="btn" style="background-color: rgb(5, 130, 175); color: white; padding: 15px 30px; font-family: 'Press Start 2P', cursive; transition: background-color 0.3s;">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>
</div>
@endsection
