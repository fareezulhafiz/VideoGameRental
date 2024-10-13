@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive; margin-bottom: 30px;">Create User</h1> <!-- Increased bottom margin -->
    
    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(255, 255, 255, 0.8);"> <!-- Container styling -->
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 100%; padding: 15px; font-family: 'Press Start 2P', cursive; margin-top: 20px;">Create</button> <!-- Added margin-top for spacing -->
        </form>
    </div>
</div>
@endsection
