@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="color: yellow; font-family: 'Press Start 2P', cursive; margin-bottom: 30px;">Edit User</h1> <!-- Title with gaming font and yellow color -->

    <div class="p-4 border border-secondary rounded shadow-lg" style="background-color: rgba(255, 255, 255, 0.9);"> <!-- Container styling -->
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="name" class="font-weight-bold">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group mt-3">
                <label for="email" class="font-weight-bold">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('users.index') }}" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
                <button type="submit" class="btn" style="background-color: rgb(5, 130, 175); color: white; width: 48%; padding: 15px; font-family: 'Press Start 2P', cursive;">
                    <i class="fas fa-save"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
