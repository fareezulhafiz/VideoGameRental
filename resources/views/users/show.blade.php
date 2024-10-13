@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive;">Customer Details</h1> <!-- Title styling outside the container -->
    
    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(255, 255, 255, 0.8);"> <!-- Container styling -->
        <table class="table table-striped table-bordered mt-4"> <!-- Table styles -->
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
            </thead>
        </table>
        
        <a href="{{ route('users.index') }}" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive;">Back</a> <!-- Styled button -->
    </div>
</div>
@endsection
